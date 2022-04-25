<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGharJaggaNamsariSifaris extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gharjagganamsarisifaris', function (Blueprint $table) {
            $table->increments('id');

$table->text('patra_sankhya')->nullable();
$table->text('chalani_no')->nullable();
$table->text('issued_date')->nullable();
$table->text('office_chairman')->nullable();
$table->text('office_name')->nullable();
$table->text('sabik_address')->nullable();
$table->text('sabik_type')->nullable();
$table->text('sabik_ward')->nullable();
$table->text('person_title')->nullable();
$table->text('person_name')->nullable();
$table->text('relation')->nullable();
$table->text('death_person_name')->nullable();
$table->text('death_date')->nullable();
$table->text('applicant_person_title')->nullable();
$table->text('applicant_person_name')->nullable();
$table->text('property_type')->nullable();

//start



$table->text('app_name')->nullable();
$table->text('app_relation')->nullable();
$table->text('app_date')->nullable();


$table->text('hakdarko_name')->nullable();
$table->text('mritak_relation')->nullable();
$table->text('father_husband_name')->nullable();
$table->text('ciitizenship_no')->nullable();
$table->text('kitta_no')->nullable();
//end

$table->text('ward_no')->nullable();
$table->text('area')->nullable();
$table->text('jagga_bibaran_kitta_no')->nullable();
$table->text('remakrs')->nullable();

$table->text('officer')->nullable();
$table->text('hakim_ko_name')->nullable();

$table->text('nibedak_name')->nullable();
$table->text('nibedak_address')->nullable();
$table->text('nibedak_citizenship_no')->nullable();
$table->text('nibedak_nid')->nullable();

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
        Schema::dropIfExists('gharjagganamsarisifaris');
    }
 }

