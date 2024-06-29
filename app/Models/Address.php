<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{


    /*

 $table->id();
            
            $table->text("name");
            $table->integer("postal_code");
            $table->text("address");
            $table->text("phone");
            $table->text("city");
            $table->boolean("same_data")->default(false);
            $table->text("measuring_point")->default('');
    */
        protected $fillable = [
       "name",
       "postal_code",
       "address",
       "phone",
       "city",
       "same_data",
       "measuring_point",
    ];
}
