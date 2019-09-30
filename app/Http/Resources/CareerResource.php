<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CareerResource extends JsonResource
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
          'title' => $this->title,
          'location' => $this->location,
          'department' => $this->department,
          'notes' => $this->notes,
          'responsabilites' => $this->responsabilites,
          'requirements' => $this->requirements,
          'core_competencies' => $this->core_competencies,
          'extra' => $this->extra,
        ];
    }
}
