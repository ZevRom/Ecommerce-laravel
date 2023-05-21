<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Product;

class ColorProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //LLAMAMOS AL MODELO PRODUCTO CON UN FILTRO, PRIMER PARAMETRO ESPECIFICAMOS EL NOMBRE DE LA RELACIÓN QUE QUEREMOS CONSULTAR, 
        //SEGUNDO PARAMETRO PASARLE UNA FUNCIÓN
        $products = Product::whereHas('subcategory', function(Builder $query){
            //Traer todo los productos, solo si la subcategoria asociada a este producto tiene a color = true y size = false
            $query->where('color',true)
                    ->where('size', false);
        })->get();

        foreach ($products as $product) {
            $product->colors()->attach([
                1 =>[
                    'quantity'=>10
                ],
                2 =>[
                    'quantity'=>10
                ],
                3 =>[
                    'quantity'=>10
                ],
                4 =>[
                    'quantity'=>10
                ]
            ]);
        }
    }
}
