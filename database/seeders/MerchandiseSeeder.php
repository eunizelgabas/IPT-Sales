<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'product_name'=> 'Eggnog',
                'brand_name'=> 'Nissin',
                'retail_price'=> '30',
                'wholesale_price'=> '25',
                'wholesale_qty'=> '2',
                'qty_stock'=> '400',
                'unit_id'=>'3',
                'category_id'=>'1',
            ],

            [
                'product_name'=> 'Tootbrush',
                'brand_name'=> 'Colgate',
                'retail_price'=> '35',
                'wholesale_price'=> '30',
                'wholesale_qty'=> '6',
                'qty_stock'=> '400',
                'unit_id'=>'3',
                'category_id'=>'3',  
            ],

            [
                'product_name'=> 'Eggnog',
                'brand_name'=> 'Nissin',
                'retail_price'=> '30',
                'wholesale_price'=> '25',
                'wholesale_qty'=> '2',
                'qty_stock'=> '400',
                'unit_id'=>'3',
                'category_id'=>'1',
            ]
        ];
        foreach($data as $merchandises){
            \App\Models\Merchandise::create($merchandises);
        }  
    }
}
