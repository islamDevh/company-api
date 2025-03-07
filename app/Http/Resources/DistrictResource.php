<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DistrictResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'city' => [
                'name' => $this->city->name, //get (name) 
                'details' => new CityResource($this->city), //get (id , name) collection
                // 'details' => new CityResource::collection($this->city), //if there is many data

            ],
        ];
    }
}
