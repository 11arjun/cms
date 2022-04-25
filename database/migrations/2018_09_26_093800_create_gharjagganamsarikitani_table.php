<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGharjagganamsarikitaniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gharjagganamsarikitani', function (Blueprint $table) {
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
$table->text('g_name')->nullable();
$table->text('f_name')->nullable();
$table->text('m_name')->nullable();
$table->text('person_name')->nullable();
$table->text('relation')->nullable();
$table->text('death_person_name')->nullable();
$table->text('death_date')->nullable();
$table->text('land_local_state')->nullable();
$table->text('land_ward')->nullable();
$table->text('land_sabik_address')->nullable();
$table->text('land_sabik_ward')->nullable();
$table->text('land_kitta_no')->nullable();
$table->text('jagga_area')->nullable();
$table->text('darta_type')->nullable();
//start
$table->text('app_name')->nullable();
$table->text('app_relation')->nullable();
$table->text('app_date')->nullable();

$table->text('hakdarko_name')->nullable();
$table->text('mritak_relation')->nullable();
$table->text('  father_husband_name')->nullable();
$table->text('  ciitizenship_no')->nullable();
$table->text('kitta_no')->nullable();

$table->text('namsarihakdarko_name')->nullable();
$table->text('namsarimritak_relation')->nullable();
$table->text(' namsarifather_husband_name')->nullable();
$table->text('namsariciitizenship_no')->nullable();
$table->text('namsarikitta_no')->nullable();
//end

$table->text('sarjaminlocal_state')->nullable();
$table->text('sarjaminward')->nullable();
$table->text('sarjaminbarsa')->nullable();
$table->text('sarjaminname')->nullable();
$table->text('sarjaminno')->nullable();
$table->text('hakim_ko_name')->nullable();
$table->text('nibedak_name')->nullable();
$table->text('nibedak_address')->nullable();
$table->text('nibedak_citizenship_no')->nullable();
$table->text('nibedak_nid')->nullable();

$table->text('sabik_type')->nullable();
$table->text('g_title')->nullable();
$table->text('c_title')->nullable();
$table->text('person_title')->nullable();
$table->text('nata_title')->nullable();
$table->text('land_sabik_type')->nullable();
$table->text('prop_type')->nullable();
$table->text('hak_type')->nullable();
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
        Schema::dropIfExists('gharjagganamsarikitani');
    }
}
