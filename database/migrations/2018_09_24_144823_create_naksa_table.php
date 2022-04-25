<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNaksaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naksa', function (Blueprint $table) {
            $table->increments('id');

$table->text('patra_sankhya')->nullable();
$table->text('chalani_no')->nullable();
$table->text('issued_date')->nullable();
$table->text('letter_subject')->nullable();
$table->text('karyalaya_name')->nullable();
$table->text('karyalaya_district')->nullable();
$table->text('local_state')->nullable();
$table->text('ward')->nullable();
$table->text('sabik_address')->nullable();
$table->text('sabik_ward')->nullable();
$table->text('nibedak')->nullable();
$table->text('plot_local_state_name')->nullable();
$table->text('oda_ko_name')->nullable();
$table->text('hakim_ko_name')->nullable();
$table->text('nibedak_name')->nullable();
$table->text('nibedak_address')->nullable();
$table->text('nibedak_citizenship_no')->nullable();
$table->text('nibedak_nid')->nullable();
$table->text('sabik_type')->nullable();
$table->text('officer')->nullable();
$table->integer('user_id')->nullable();
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
        Schema::dropIfExists('naksa');
    }
}
