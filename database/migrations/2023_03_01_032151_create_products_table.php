<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('yield'); // quantidade produzida
            $table->double('amount_additional_products', 8, 2);
            $table->double('extra_addition', 8, 2);
            $table->double('amount_indirect_costs', 8, 2);
            $table->double('amount_direct_costs', 8, 2);
            $table->double('amount_costs', 8, 2);
            $table->double('percentage_sale1', 8, 2);
            $table->double('amount_percentage_sale1', 8, 2);
            $table->double('unit_value_sale1', 8, 2);
            $table->double('percentage_sale2', 8, 2);
            $table->double('amount_percentage_sale2', 8, 2);
            $table->double('unit_value_sale2', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
