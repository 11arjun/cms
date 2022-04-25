<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasobasSifarisDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basobas_sifaris_details', function (Blueprint $table) {
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
        Schema::dropIfExists('basobas_sifaris_details');
    }
}
