<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEsthaieBasobasDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esthaie_basobas_details', function (Blueprint $table) {
            $table->increments('id');
            $table->text('basobas_id')->nullable();
            $table->text('toll')->nullable();
            $table->text('batto_name')->nullable();
            $table->text('ghar_no')->nullable();
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
        Schema::dropIfExists('esthaie_basobas_details');
    }
}
