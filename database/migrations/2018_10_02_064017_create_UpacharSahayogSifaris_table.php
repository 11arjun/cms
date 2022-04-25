<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpacharSahayogSifarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UpacharSahayogSifaris', function (Blueprint $table) {
            $table->increments('id');
            $table->text('patra_sankya')->nullable();
$table->text('chalani_no')->nullable();
$table->text('issued_date')->nullable();
$table->text('karyalaya_name')->nullable();
$table->text('office_address')->nullable();
$table->text('letter_subject')->nullable();
$table->text('local_state')->nullable();
$table->text('ward')->nullable();
$table->text('sabik_address')->nullable();
$table->text('sabik_ward')->nullable();
$table->text('person_name')->nullable();
$table->text('disease_name')->nullable();
$table->text('hospital_name')->nullable();
$table->text('hakim_ko_name')->nullable();
$table->text('nibedak_name')->nullable();
$table->text('nibedak_address')->nullable();
$table->text('nibedak_citizenship_no')->nullable();
$table->text('nibedak_nid')->nullable();
$table->text('user_id')->nullable();
$table->text('sabik_type')->nullable();
$table->text('person_title')->nullable();
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
        Schema::dropIfExists('UpacharSahayogSifaris');
    }
}
