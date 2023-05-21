<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Product;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::whereHas('subcategory', function(Builder $query){
            //Traer todo los productos, solo si la subcategoria asociada a este producto tiene a color = true y size = true
            $query->where('color',true)
                    ->where('size', true);
        })->get();


        $sizes = ['Talla S','Talla M','Talla L'];

        foreach ($products as $product) {
            foreach ($sizes as $size) {
                $product->sizes()->create([
                    'name' => $size
                ]);
            }
        }
    }
}
