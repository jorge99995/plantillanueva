<?php

namespace App\Http\Controllers;

use App\Http\Resources\clientes\ClienteGCollection;
use Illuminate\Http\Request;
use App\Imports\ClienteImport;
use App\Models\Cliente;
use Maatwebsite\Excel\Facades\Excel;

class ClienteController extends Controller
{
    public function index(Request $request)
    {

        $clientes = Cliente::orderBy('id')->paginate(10);
        return response()->json([

            "clientes" => ClienteGCollection::make($clientes),
            'pagination' =>[
                'total' =>  $clientes->total(),
                'current_page' =>  $clientes->currentPage(),
                'per_page' =>  $clientes->perPage(),
                'last_Page' =>  $clientes->lastPage(),
                'from' =>  $clientes->firstItem(),
                'to' =>  $clientes->lastPage(),
            ]

        ]);


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

    public function saveExcelCliente(Request $request)
    {
        try{
            Excel::import(new ClienteImport,$request->file('file'));
            //$usuarios = (new UsersImport)->toArray($request->file("files"));

            return response()->json("Import success",200);

        }catch ( \Exception $e){
            return response()->json($e->getMessage(),200);
        }
    }
}

