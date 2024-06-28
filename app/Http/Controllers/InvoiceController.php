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
public function randomDate(){
    $month=rand(1,12);
    $month=($month<10)?"0".$month:$month;

    $day=rand(1,28);
    $day=($day<10)?"0".$day:$day;

    return rand(2000,2024)."-".$month."-".$day;
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
    ];
    for($i=0;$i<30;$i++){
        $data[$i]=["id"=>rand(1,1000),"name"=>$this->randomString(),"paid"=>rand(0,1),"date"=>$this->randomDate(),"price"=>rand(5,25),"checked"=>rand(0,1)];
    }
    return response()->json($data);
}
    //
}
