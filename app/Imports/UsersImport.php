<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    use Importable;
    public function model(array $row)
    {
        if (empty($row['nombre']) || empty($row['correo']) || empty($row['apellido']) || empty($row['contrasena'])) {
            throw new \Exception('Alguno de los campos requeridos está vacío ');
        }

        return new User([
            'name'     => $row['nombre'],
            'email'    => $row['correo'],
            'surname'    => $row['apellido'],
            'password' => Hash::make($row['contrasena']),
            "type_user" => 2,
            "role_id" => 1
        ]);
    }
}
