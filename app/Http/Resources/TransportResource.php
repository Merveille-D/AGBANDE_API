<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'fabric_year' => $this->fabric_year,
            'circulation_year' => $this->circulation_year,
            'tech_visit_expire' => $this->tech_visit_expire,
            'gris_card' => $this->gris_card,
            'assurance_card' => $this->assurance_card,
            'tech_visit' => $this->tech_visit,
            'is_validated' => $this->is_validated,
            'user' => $this->user,
            'type'=>$this->type
        ];
    }
}
