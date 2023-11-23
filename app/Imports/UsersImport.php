<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class UsersImport implements ToModel
{
    use Importable;
    public function model(array $row)
    {
        return new User([
            //
           'name'     => $row[0],
           'email'    => $row[1],
           'surname'    => $row[2],
           'password' => Hash::make($row[3]),


        ]);
    }
}
