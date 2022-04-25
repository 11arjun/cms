<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuchanatasguthiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suchanatasguthi', function (Blueprint $table) {
            $table->increments('id');
            
$table->text('patra_sankhya')->nullable();
$table->text('chalani_no')->nullable();
$table->text('issued_date')->nullable();
$table->text('letter_subject')->nullable();
$table->text('karyalaya_name')->nullable();
$table->text('landowner_name')->nullable();
$table->text('malpot_address')->nullable();
$table->text('landsabik_address')->nullable();
$table->text('landsabik_ward')->nullable();
$table->text('kitta_no')->nullable();
$table->text('area')->nullable();
$table->text('appsabik_address')->nullable();
$table->text('appsabik_ward')->nullable();
$table->text('applocal_states')->nullable();
$table->text('appward')->nullable();
$table->text('applicant_name')->nullable();
$table->text('home_type2')->nullable();
$table->text('hakim_ko_name')->nullable();
$table->text('nibedak_name')->nullable();
$table->text('nibedak_address')->nullable();
$table->text('nibedak_citizenship_no')->nullable();
$table->text('nibedak_nid')->nullable();


$table->text('landsabik_type')->nullable();
$table->text('appsabik_type')->nullable();
$table->text('home_type')->nullable();
$table->text('officer')->nullable();
$table->text('user_id')->nullable();
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
        Schema::dropIfExists('suchanatasguthi');
    }
}
