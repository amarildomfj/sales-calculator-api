<?php

namespace Database\Seeders;

use App\Models\AdditionalProduct;
use Illuminate\Database\Seeder;

class AdditionalProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdditionalProduct::factory()->count(5)->create();
    }
}
