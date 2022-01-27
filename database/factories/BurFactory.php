<?php

namespace Database\Factories;

use App\Models\Bur;
use App\Models\Burcat;
use Illuminate\Database\Eloquent\Factories\Factory;

class BurFactory extends Factory
{
    protected $model = Bur::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'position'=>$this->faker->sentence(3),
            'responsibilities'=>$this->faker->text,
            'category_id'=>Burcat::get()->random()->id,
        ];
    }
}
