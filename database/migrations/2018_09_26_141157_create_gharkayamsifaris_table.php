<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGharkayamsifarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gharkayamsifaris', function (Blueprint $table) {
            $table->increments('id');

 $table->text('patra_sankhya')->nullable();
 $table->text('chalani_no')->nullable();
 $table->text('issued_date')->nullable();
 $table->text('letter_subject')->nullable();
 $table->text('office_chairman')->nullable();
 $table->text('office_name')->nullable();
 $table->text('local_state')->nullable();
 $table->text('ward')->nullable();
 $table->text('sabik_address')->nullable();
 $table->text('sabik_ward')->nullable();
 $table->text('person_name')->nullable();

//start
 $table->text('sabik_vdc')->nullable();
 $table->text('sabik_ward_no')->nullable();
$table->text('ward_no')->nullable();
 $table->text('kitta_no')->nullable();
 $table->text('area')->nullable();
 $table->text('ghar_nirman_year')->nullable();
//end
 $table->text('hakim_ko_name')->nullable();
 $table->text('nibedak_name')->nullable();
 $table->text('nibedak_address')->nullable();
 $table->text('nibedak_citizenship_no')->nullable();
 $table->text('nibedak_nid')->nullable();

 $table->text('sabik_type')->nullable();
 $table->text('person_title')->nullable();
 $table->text('ghar_nirman_option')->nullable();
 $table->text('sabik')->nullable();
 $table->text('officer')->nullable();
$table->text('user_id');
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
        Schema::dropIfExists('gharkayamsifaris');
    }
}
