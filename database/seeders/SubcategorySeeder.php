<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            /* Celulares y tablets */
            [
                'category_id' => 1,
                'name' => 'Celulares y smartphones',
                'slug' => Str::slug('Celulares y smartphones'),
                'color' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Accesorios para celulares',
                'slug' => Str::slug('Accesorios para celulares'),
            ],
            [
                'category_id' => 1,
                'name' => 'Smarthwatches',
                'slug' => Str::slug('Smarthwatches'),
            ],

            /* TV, audio y video */
            [
                'category_id' => 2,
                'name' => 'TV y audio',
                'slug' => Str::slug('TV y audio'),
            ],
            [
                'category_id' => 2,
                'name' => 'Audios',
                'slug' => Str::slug('Audios'),
            ],
            [
                'category_id' => 2,
                'name' => 'Audio para autos',
                'slug' => Str::slug('Audio para autos'),
            ],

            /* Consola y Videjuegos */
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox')
            ],
            [
                'category_id' => 3,
                'name' => 'PC',
                'slug' => Str::slug('PC'),
            ],
            [
                'category_id' => 3,
                'name' => 'PSP',
                'slug' => Str::slug('PSP'),
            ],
            /* Computación */ 
            [
                'category_id' => 4,
                'name' => 'Teclado',
                'slug' => Str::slug('Teclado')
            ],
            [
                'category_id' => 4,
                'name' => 'Monitor',
                'slug' => Str::slug('Monitor'),
            ],
            [
                'category_id' => 4,
                'name' => 'Mouse',
                'slug' => Str::slug('Mouse'),
            ],

            /* Moda */ 
            [
                'category_id' => 5,
                'name' => 'Calzados',
                'slug' => Str::slug('Calzados'),
                'color' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Accesorios',
                'slug' => Str::slug('Pantalones y Camisas'),
                'color' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Mujeres',
                'slug' => Str::slug('Mujeres'),
                'color' => true,
                'size'=> true,
            ],
            [
                'category_id' => 5,
                'name' => 'Hombres',
                'slug' => Str::slug('Hombres'),
                'color' => true,
                'size'=> true,
            ],
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::factory()->create($subcategory);
        }
    }
}
