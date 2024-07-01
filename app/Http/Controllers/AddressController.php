<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function createAddress(Request $request){
        DB::beginTransaction();
        try{

            Address::create($request->all());
            DB::commit();
           return response()->json(["message" => "Address created"]);
        }catch (\Exception $e) {
            DB::rollback();
            return response()->json(["message" => "Address not created"]);
        }
    }

    public function updateAddress($id,Request $request){
        DB::beginTransaction();
        try{
            $address = Address::find($id);
            $address->update($request->all());
            DB::commit();
           return response()->json(["message" => "Address updated"]);
        }catch (\Exception $e) {
            DB::rollback();
            return response()->json(["message" => "Address not updated"]);
        }
    }
    //
}
