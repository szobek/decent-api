<?php

namespace App\Http\Controllers;

use App\Models\Invoice;

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

   
public function listInvoices(){

    /*
id?: number;
  name?: string;
  paid?: boolean;
  date?: string;
  price?: number;
  checked?: boolean;
    */

   $data=Invoice::all();
    return response()->json($data);
}
    //
}
