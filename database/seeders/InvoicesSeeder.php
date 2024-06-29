<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice;
use Illuminate\Support\Str;

class InvoicesSeeder extends Seeder
{
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
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
        ];
        for($i=0;$i<30;$i++){
            $data[$i]=["id"=>$i+1,"name"=>STR::random(20),"paid"=>rand(0,1),"date"=>$this->randomDate(),"price"=>rand(5,25),"checked"=>rand(0,1)];
            Invoice::create($data[$i]);
        }
    }
}
