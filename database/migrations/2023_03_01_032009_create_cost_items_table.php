<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_items', function (Blueprint $table) {
            
            $table->id();
            $table->string('name');
            $table->double('amount', 8, 2);
            $table->integer('quantity');
            $table->double('unit_value', 8, 2);
            $table->string('measurement_unit');
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
        Schema::dropIfExists('cost_items');
    }
}
