<?php

namespace Database\Factories;

use App\Models\Drug;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class DrugFactory extends Factory
{
    protected $model = Drug::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'supplier_id' => Supplier::inRandomOrder()->first()->id,
        ];
    }
}
