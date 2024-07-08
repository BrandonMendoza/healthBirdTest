<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ZipcodeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    // public function toArray($request)
    // {
    //     return parent::toArray($request);
    // }

    public function toArray($request)
    {
        return [
          'id' => $this->id,
          'type' => 'zipcode',
          'attributes' =>[
                'zipcode' => $this->zipcode,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
          ]
        ];
    }
}
