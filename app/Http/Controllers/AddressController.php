<?php

namespace App\Http\Controllers;

use App\Models\Address;

class AddressController extends Controller
{

    public function __construct()
    {
        //
    }


    public function getAddress()
    {

        $data = Address::all();

        return response()->json($data);
    }
    public function getAddressById($id)
    {
        $data = Address::find($id);
        if (is_null($data)) {
            return response()->json(["message" => "No address"], 419);
        }


        return response()->json($data);
    }
    //
}
