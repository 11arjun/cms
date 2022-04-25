<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKarobarPannoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('KarobarPanno', function (Blueprint $table) {
            $table->increments('id');
            $table->text('patra_sankya')->nullable();
 $table->text('chalani_no')->nullable();
 $table->text('issued_date')->nullable();
 $table->text('letter_subject')->nullable();
 $table->text('pan_office_name')->nullable();
 $table->text('pan_office_address')->nullable();
 $table->text('local_state')->nullable();
 $table->text('ward')->nullable();
 $table->text('sabik_address')->nullable();
 $table->text('sabik_ward')->nullable();
 $table->text('person_name')->nullable();
 $table->text('pasal_address')->nullable();
 $table->text('pan_no')->nullable();
 $table->text('pasal_name')->nullable();
 $table->text('pasal_new')->nullable();
 $table->text('bodartha')->nullable();
 $table->text('hakim_ko_name')->nullable();
 $table->text('nibedak_name')->nullable();
 $table->text('nibedak_address')->nullable();
 $table->text('nibedak_citizenship_no')->nullable();
 $table->text('nibedak_nid')->nullable();
 $table->text('user_id')->nullable();

$table->text('sabik_type')->nullable();
$table->text('person_title')->nullable();
$table->text('property_type')->nullable();
$table->text('business_start')->nullable();
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
        Schema::dropIfExists('KarobarPanno');
    }
}
