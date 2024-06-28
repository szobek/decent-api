<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    /*
id?: number;
  name?: string;
  paid?: boolean;
  date?: string;
  price?: number;
  checked?: boolean;

    */
    protected $fillable = [
        "name",
        "date",
        "price",
        "paid",
        "checked",
    ];
}
