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
    //
}
