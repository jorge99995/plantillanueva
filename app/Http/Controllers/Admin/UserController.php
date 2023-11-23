<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;

use App\Imports\UsersImport;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Resources\User\UserGCollection;


class UserController extends Controller
{

    public function index()
    {
        //
        $users = User::where("type_user", 2)->orderby("id", "desc")->get();
        return response()->json([

            "users" => UserGCollection::make($users),

        ]);

        // return response()->json(
        //     [
        //         "users" => $users->map(function ($user) {
        //             return [
        //                 "name" => $user->name,
        //                 "surname" => $user->surname,
        //                 "email" => $user->email,
        //                 "role" => $user->role,
        //                 "created_at" => $user->created_at,
        //                 "avatar" => env("APP_URL") . "storage/" . $user->avatar,


        //             ];
        //         }),
        //     ]
        // );
    }
    public function saveExcelUsers(Request $request)
    {

    //    Excel::import(new UsersImport,$request->file('usuarios'));

        $usuarios = (new UsersImport)->toArray($request->file("usuarios"));
        return response()->json([   'user'=>$usuarios],200);



    }



    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
