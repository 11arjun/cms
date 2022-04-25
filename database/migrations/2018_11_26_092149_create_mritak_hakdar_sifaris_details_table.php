<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMritakHakdarSifarisDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mritak_hakdar_sifaris_details', function (Blueprint $table) {
            $table->increments('id');
            $table->text('mritak_hakdar_id')->nullable();
            $table->text('hakdar_full_name')->nullable();
            $table->text('relation')->nullable();
            $table->text('father_name')->nullable();
            $table->text('citizenship_no')->nullable();
            $table->text('house_no')->nullable();
            $table->text('kitta_no')->nullable();
            $table->text('batto_name')->nullable();
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
        Schema::dropIfExists('mritak_hakdar_sifaris_details');
    }
}
