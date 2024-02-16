<?php

namespace Database\Factories;

use App\Models\Sales;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalesFactory extends Factory
{
    protected $model = Sales::class;

    public function definition()
    {
        $drugIds = \App\Models\Drug::pluck('id')->toArray();
        if (empty($drugIds)) {
            return [];
        }

        return [
            'drug_id' => $this->faker->randomElement($drugIds),
            'quantity' => $this->faker->numberBetween(1, 100),
            'total_price' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
