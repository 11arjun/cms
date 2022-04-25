<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTinpusteJaggaBibaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tinpuste_jagga_bibarans', function (Blueprint $table) {
            $table->increments('id');
            $table->text('tinpuste_id')->nullable();
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
        Schema::dropIfExists('tinpuste_jagga_bibarans');
    }
}
