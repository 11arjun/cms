<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGharBatoPramanitDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ghar_bato_pramanit_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ghar_bato_id')->nullable();
            $table->text('ward_no')->nullable();
            $table->text('seat_no')->nullable();
            $table->text('kitta_no')->nullable();
            $table->text('area')->nullable();
            $table->text('batto_name')->nullable();
            $table->text('ghar_abastha')->nullable();
            $table->text('bato_type')->nullable();
            $table->text('remark')->nullable();
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
        Schema::dropIfExists('ghar_bato_pramanit_detail');
    }
}
