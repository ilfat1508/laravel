<?php

namespace Database\Factories;

use App\Models\Burcat;
use Illuminate\Database\Eloquent\Factories\Factory;

class BurcatFactory extends Factory
{
    protected $model=Burcat::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'title'=>$this->faker->word,
        ];
    }
}
