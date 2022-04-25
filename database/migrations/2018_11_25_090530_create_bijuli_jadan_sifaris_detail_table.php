<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBijuliJadanSifarisDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bijuli_jadan_sifaris_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bijuli_jadan_sifaris_id')->nullable();
            $table->text('bijuli_jadan_kitta_no')->nullable();
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
        Schema::dropIfExists('bijuli_jadan_sifaris_detail');
    }
}
