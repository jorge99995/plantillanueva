<?php

namespace App\Imports;



use App\Models\Cliente;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ClienteImport implements ToModel, WithHeadingRow


{
    use Importable;

    public function model(array $row)
    {
        // if (empty($row['nombres']) || empty($row['dni']) || empty($row['celular']) || empty($row['correo'])) {
        //     throw new \Exception('Alguno de los campos requeridos está vacío ');
        // }

        
        return new Cliente([
            'nombres' => $row['nombres'],
            'dni'=> $row['dni'],
            'celular'=> $row['celular'],
            'correo'=> $row['correo'],
            'lugar_trabajo'=> $row['lugar_trabajo'],
            'area'=> $row['area'],
            'ciudad'=> $row['ciudad'],
            'codigo'=> $row['codigo'],
            'registro' => $row['registro'],
            'fecha_emision' =>  $this->getConvertDate($row['fecha_emision']),
            'horas_lectivas' => $row['horas_lectivas'],
            'fecha_inicio' =>  $this->getConvertDate($row['fecha_inicio']),
            'fecha_fin' =>$this->getConvertDate($row['fecha_fin']),
            'tema_curso' => $row['tema_curso'],
            'nota' => $row['nota'],
        ]);
    }

    public function getConvertDate(string $excelData){
        return date("Y-m-d", strtotime("1899-12-30 +{$excelData} days"));
    }
}


