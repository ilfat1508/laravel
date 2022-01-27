<?php

namespace Database\Factories;

use App\Models\Inv;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvFactory extends Factory
{
    protected $model= Inv::class;
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
