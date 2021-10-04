<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           
            [
                'name'=>'iphone X',
                "price"=>"1500",
                "description"=>"Capteur faciale disponible",
                "category"=>"Phone",
                "gallery"=>"https://www.rueducommerce.fr/medias/5c7ace8b94263c048596c6a448871377/p_1000x1000/iphone-x-silver-1.jpg"
            ]
                    
                        
       
        ]);
    }
}
