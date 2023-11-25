<?php

namespace App\Http\Resources\clientes;

use Illuminate\Http\Resources\Json\JsonResource;

class ClienteGResource extends JsonResource
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


            "id" => $this->resource->id,
            'nombres' =>$this->resource->nombres,
            'dni' =>$this->resource->dni,
            'celular' =>$this->resource->celular,
            'correo' =>$this->resource->correo,
            'lugar_trabajo' =>$this->resource->lugar_trabajo,
            'area' =>$this->resource->area,
            'ciudad' =>$this->resource->ciudad,
            'codigo' =>$this->resource->codigo,
            'registro'  =>$this->resource->registro,
            'fecha_emision'  =>$this->resource->fecha_emision,
            'horas_lectivas'  =>$this->resource->horas_lectivas,
            'fecha_inicio'  =>$this->resource->fecha_inicio,
            'fecha_fin'  =>$this->resource->fecha_fin,
            'tema_curso' =>$this->resource->tema_curso,
            'nota'  =>$this->resource->nota,
        ];
    }
}
