<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Frets;
use App\Models\Reservation;
use App\Models\Transport;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class FRET_RESERVATION_HELPER extends BASE_HELPER
{
    ##======== REGISTER VALIDATION =======##
    static function reservation_rules(): array
    {
        return [
            // 'fret' => 'required|integer',
            'price' => 'required|integer',
            "charg_date" => "required|date",
            'info' => 'required',
        ];
    }

    static function reservation_messages(): array
    {
        return [
            // 'fret.required' => 'Veuillez préciser le fret en question',
            'price.required' => 'Veuillez préciser votre prix d\'estimation',
            'charg_date.required' => 'Veuillez préciser la date de chargement',
            'info.required' => 'Veuillez laisser un message au proprietaire du fret',

            // 'fret.integer' => 'Ce champ est un entier',
            'price.integer' => 'Ce champ est un entier',
            'charg_date.date' => 'Ce champ est une date',
        ];
    }

    static function Reservation_Validator($formDatas)
    {
        $rules = self::reservation_rules();
        $messages = self::reservation_messages();

        $validator = Validator::make($formDatas, $rules, $messages);
        return $validator;
    }

    static function retrieveReservation($id)
    {
        $reservation = Reservation::with(['owner', "fret"])->find($id);
        if (!$reservation) {
            return self::sendError('Cette reservation n\'existe pas!', 404);
        };
        return self::sendResponse($reservation, "Reservation récupérée avec succès");
    }

    static function createReservation($request)
    {
        $formData = $request->all();

        if ($request->get("fret") && $request->get("transport")) {
            return self::sendError('Vous ne pouvez pas réserver un fret et un moyen de transport en meme temps!', 505);
        }

        if ($request->get("fret")) {
            $fret = Frets::find($request->get("fret"));
            if (!$fret) {
                return self::sendError('Ce fret n\' existe pas!', 404);
            }
        } elseif ($request->get("transport")) {
            $transport = Transport::find($request->get("transport"));
            if (!$transport) {
                return self::sendError('Ce moyen de transport n\' existe pas !', 404);
            }
        } else {
            return self::sendError('Veuillez choisir soit un transport ou un fret à reserver!', 404);
        }

        $formData["owner"] = request()->user()->id;
        ##ENREGISTREMENT DE LA RESERVATION DANS LA DB
        $reservation = Reservation::create($formData); #ENREGISTREMENT DU USER DANS LA DB

        if ($request->get("fret")) {
            ###_____ENVOIE DE NOTIFICATION AU EXPEDITEUR(auteur du fret) _____###
            $expediteur = User::find($fret->owner);
            $message = "Votre Fret d'ID <<" . $fret->id . " >> a été réservé ";
            try {
                Send_Notification(
                    $expediteur,
                    "RESERVATION DE FRET SUR AGBANDE",
                    $message,
                );
            } catch (\Throwable $th) {
                //throw $th;
            }


            ###___NOTONS QUE CE FRET EST RESERVEE
            $fret->reserved = 1;
            $fret->save();
        } elseif ($request->get("transport")) {
            ###_____ ENVOIE DE NOTIFICATION AU TRANSPORTEUR _____###
            $expediteur = User::find($transport->owner);
            $message = "Votre Moyen de transport <<" . $transport->name . " >> a été réservé ";
            try {
                Send_Notification(
                    $expediteur,
                    "RESERVATION DE MOYEN DE TRANSPORT SUR AGBANDE",
                    $message,
                );
            } catch (\Throwable $th) {
                //throw $th;
            }

            ###___NOTONS QUE CE TRANSPORT EST RESERVE
            $transport->reserved = 1;
            $transport->save();
        } else {
            # code...
        }

        return self::sendResponse($reservation, 'Reservation ajoutée avec succès!!');
    }

    static function reservations()
    {
        $user = request()->user();
        $all_reservations = Reservation::with(['owner', "fret", "transport"])->orderBy('id', 'desc')->get();
        $reservations = [];

        if (IsUserAnAdminOrExpeditor($user->id)) {
            ###__s'il est un expediteur, il doit recuperer les reservations liées à ses frets à lui
            foreach ($all_reservations as $reservation) {
                if ($reservation->fret) {
                    $fret = Frets::find($reservation->fret);
                    if ($fret->owner == $user->id) {
                        array_push($reservations, $reservation);
                    }
                }
            }
        } elseif (IsUserAnAdminOrTransporter($user->id)) {
            ###__s'il est un transporteur, il doit recuperer les reservations liées à ses transports à lui
            foreach ($all_reservations as $reservation) {
                return $reservation;
                if ($reservation->transport) {
                    $fret = Frets::find($reservation->transport);
                    if ($fret->owner == $user->id) {
                        array_push($reservations, $reservation);
                    }
                }
            }
        } else {
            ###__Autrement, il recupere toutes les reservations
            $reservations = $all_reservations;
        }
        return self::sendResponse($reservations, 'Liste des reservations récupérée avec succès!!');
    }

    static function deleteReservation($request, $id)
    {
        $reservation = Reservation::find($id);

        if (!$reservation) {
            return self::sendError("Cette reservation n'existe pas!", 505);
        }

        $reservation->delete();
        return self::sendResponse($reservation, 'Reservation supprimée avec succès!!');
    }

    static function validateReservation($request, $id)
    {
        $formData = $request->all();
        $reservation = Reservation::find($id);

        if (!$reservation) {
            return self::sendError("Cette reservation n'existe pas!", 505);
        }

        if ($reservation->validated) {
            return self::sendError("Cette réservation est déjà validée!", 505);
        }

        ###____ENVOIE DE NOTIFICATION A L'AUTEUR DE LA RESERVATION QUE SA RESERVATION A ETE APPOVEE _____##
        $reservation_owner = User::find($reservation->owner);

        if ($reservation->fret) {
            if (IsUserAnAdminOrExpeditor($reservation_owner->id)) {
                $message = "Votre Réservation de Fret d'ID <<" . $reservation->fret . " >> créee à la date  <<" . $reservation->created_at . " >> a été approuvée!";

                try {
                    Send_Notification(
                        $reservation_owner,
                        "VALIDATION D'UNE RESERVATION SUR AGBANDE",
                        $message,
                    );
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        }

        if ($reservation->transport) {
            if (IsUserAnAdminOrTransporter($reservation_owner->id)) {
                $transport = Transport::find($reservation->transport);
                $message = "Votre réservation de Transport << " . $transport->name . " >> créee à la date  <<" . $reservation->created_at . " >> a été approuvée!";

                try {
                    Send_Notification(
                        $reservation_owner,
                        "VALIDATION D'UNE RESERVATION SUR AGBANDE",
                        $message,
                    );
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        }


        $reservation->validated = 1;
        $reservation->save();

        return self::sendResponse($reservation, 'Reservation validée avec succès!!');
    }
}
