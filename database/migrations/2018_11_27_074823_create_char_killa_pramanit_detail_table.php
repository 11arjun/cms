<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharKillaPramanitDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('char_killa_pramanit_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('char_killa_id')->nullable();
            $table->text('ward_no')->nullable();
            $table->text('seat_kitta_area')->nullable();
            $table->text('batto_abastha')->nullable();
            $table->text('east')->nullable();
            $table->text('west')->nullable();
            $table->text('north')->nullable();
            $table->text('south')->nullable();
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
        Schema::dropIfExists('char_killa_pramanit_detail');
    }
}
