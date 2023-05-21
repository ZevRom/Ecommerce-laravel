<?php

namespace Database\Factories;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Subcategory::class;

    public function definition()
    {
        return [
            'image'=> 'subcategories/' .$this->faker->image('storage/app/public/subcategories', 640, 480, null, false)
        ];
    }
}
