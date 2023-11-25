<?php

namespace App\Http\Resources\clientes;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ClienteGCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            "data"=>ClienteGResource::collection($this->collection),
        ];
    }
}
