<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDharaJadanSifarisDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dhara_jadan_sifaris_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dhara_jadan_sifaris_id')->nullable();
            $table->text('dhara_jadan_kitta_no')->nullable();
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
         Schema::dropIfExists('dhara_jadan_sifaris_detail');
    }
}
