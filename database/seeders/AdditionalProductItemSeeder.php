<?php

namespace Database\Seeders;

use App\Models\AdditionalProductItem;
use Illuminate\Database\Seeder;

class AdditionalProductItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdditionalProductItem::factory()->count(30)->create();
    }
}
