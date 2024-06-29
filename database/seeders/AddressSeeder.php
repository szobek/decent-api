<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*
"name",
       "postal_code",
       "address",
       "phone",
       "city",
       "same_data",
       "measuring_point",
        */
        Address::create(
            [
            "name"=>"",
            "postal_code"=>rand(1,9).rand(1,9).rand(1,9).rand(1,9),
            "address"=>STR::random(35),
            "phone"=>"06".rand(1000000,999999999),
            "city"=>STR::random(10),
            "same_data"=>rand(0,1),
            "measuring_point"=>STR::random(30)]
        );
    }
}
