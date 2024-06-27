<?php

namespace App\Http\Controllers;

class InvoiceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function randomString(){
        $string="";
        $letters="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_-";
        for ($i=0; $i <20 ; $i++) { 
            $string .=$letters[rand(0,strlen($letters)-1)];
        }
        return $string;
    }
public function listInvoices(){

    /*
id?: number;
  name?: string;
  paid?: boolean;
  date?: string;
  price?: number;
  checked?: boolean;
    */
    $data=[
        ["id"=>10,"name"=>$this->randomString()]
    ];
    return response()->json($data);
}
    //
}
