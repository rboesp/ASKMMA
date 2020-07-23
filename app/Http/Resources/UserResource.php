<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'zip' => $this->zip,
            'npn' => $this->npn,
            'phone' => $this->phone,
            'sunfire_access' => $this->sunfire_access,
            'created_at' => $this->created_at,
        ];
    }
}
