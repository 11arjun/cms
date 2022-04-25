<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKittaKatJaggaBibaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kitta_kat_jagga_bibaran', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kitta_kat_id')->nullable();
            $table->text('seat_no')->nullable();
            $table->text('kitta_no')->nullable();
            $table->text('area')->nullable();
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
          Schema::dropIfExists('kitta_kat_jagga_bibaran');
    }
}
