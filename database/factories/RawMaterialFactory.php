<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RawMaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $arrMeasurementUnit = ['un','ml','g'];
        $amount = rand(1,5000);
        $quantity = rand(1,200);
        $unitValue = $amount / $quantity;
        $measurementUnit = rand(0,2);  

        return [
            'name' => $this->faker->name(),
            'amount' => $amount,
            'quantity' => $quantity,
            'unit_value' => $unitValue,
            'measurement_unit' => $arrMeasurementUnit[$measurementUnit] 
        ];
    }
}
