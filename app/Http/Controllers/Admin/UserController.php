<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserGCollection;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        //
        $users = User::where("type_user", 2)->orderby("id", "desc")->get();
        return response()->json([

            "users"=>UserGCollection::make($users),
          
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
