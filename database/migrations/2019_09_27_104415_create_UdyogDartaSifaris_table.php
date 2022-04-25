<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUdyogDartaSifarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UdyogDartaSifaris', function (Blueprint $table) {
            $table->increments('id');
            $table->text('patra_sankya')->nullable();
$table->text('chalani_no')->nullable();
$table->text('issued_date')->nullable();
$table->text('letter_subject')->nullable();
$table->text('office_chairman')->nullable();
$table->text('office_address')->nullable();
$table->text('prapta_patra_miti')->nullable();
$table->text('prapta_patra_no')->nullable();
$table->text('sanchalak_name')->nullable();
$table->text('sabik_address')->nullable();
$table->text('current_address')->nullable();
$table->text('jagga_bibaran')->nullable();
$table->text('bebasaye_objective')->nullable();
$table->text('bebasaye_name')->nullable();
$table->text('hakim_ko_name')->nullable();
$table->text('nibedak_name')->nullable();
$table->text('nibedak_address')->nullable();
$table->text('nibedak_citizenship_no')->nullable();
$table->text('nibedak_nid')->nullable();
$table->text('user_id')->nullable();

$table->text('officer')->nullable();
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
        Schema::dropIfExists('UdyogDartaSifaris');
    }
}
