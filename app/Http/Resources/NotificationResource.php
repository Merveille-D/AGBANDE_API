<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);

        return [
            'id'=>$this->id,
            'sender'=>$this->sender(),
            'receiver'=>$this->receiver(),
            'msg'=>$this->message,
        ];
    }
}
