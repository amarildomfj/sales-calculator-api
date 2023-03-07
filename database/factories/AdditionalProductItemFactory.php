<?php

namespace Database\Factories;

use App\Models\RawMaterial;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdditionalProductItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $raw_material_id = rand(1,20); 
        $rawMaterial = RawMaterial::find($raw_material_id);
        $quantity = rand(1,1000); 
        $amount = $rawMaterial->unit_value * $quantity; 
        
        return [
            'additional_product_id' => rand(1,5),
            'raw_material_id' => $raw_material_id,
            'quantity' => $quantity,
            'amount' => $amount
        ];
    }
}
