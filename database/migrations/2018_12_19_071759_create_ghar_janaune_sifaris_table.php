<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGharJanauneSifarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ghar_janaune_sifaris', function (Blueprint $table) {
            $table->increments('id');
            $table->text('patra_sankhya')->nullable();
            $table->text('chalani_no')->nullable();
            $table->text('issued_date')->nullable();
            $table->text('district')->nullable();
            $table->text('local_state')->nullable();
            $table->text('ward')->nullable();
            $table->text('person_name')->nullable();
            $table->text('malpot_name')->nullable();
            $table->text('sabik_address')->nullable();
            $table->text('sabik_type')->nullable();
            $table->text('sabik_ward')->nullable();
            $table->text('local_states')->nullable();
            $table->text('wards')->nullable();
            $table->text('kitta_no')->nullable();
            $table->text('area')->nullable();
            $table->text('hakim_ko_name')->nullable();
            $table->text('officer')->nullable();
            $table->text('user_id')->nullable();
            $table->text('nibedak_name')->nullable();
            $table->text('nibedak_address')->nullable();
            $table->text('nibedak_citizenship_no')->nullable();
            $table->text('nibedak_nid')->nullable();
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
        Schema::dropIfExists('ghar_janaune_sifaris');
    }
}
