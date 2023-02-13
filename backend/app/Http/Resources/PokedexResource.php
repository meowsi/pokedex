<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PokedexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'number' => $this->number,
            'name' => strtolower($this->name),
            'type' => strtolower($this->type),
            'desc' => $this->description,
            'weight' => $this->weight,
            'height' => $this->height,
            'date' => Carbon::create($this->created_at)->format('Y-m-d'),
        ];
        
    }
}
