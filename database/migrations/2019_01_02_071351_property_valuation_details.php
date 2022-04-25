<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PropertyValuationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_valuation_details', function (Blueprint $table) {
        $table->increments('id');
        $table->text('relation_id')->nullable();
        $table->text('owner')->nullable();
        $table->text('particular_plot_no')->nullable();
        $table->text('area')->nullable();
        $table->text('total_value')->nullable();
        $table->text('remarks')->nullable();
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
        //
    }
}
