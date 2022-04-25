<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitizencertificateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizencertificate', function (Blueprint $table) {
            $table->increments('id');
            $table->text('si_name')->nullable();
$table->text('se_name')->nullable();
$table->text('paper_name')->nullable();
$table->text('karyalaya')->nullable();
$table->text('office_address')->nullable();
$table->text('app_full_name')->nullable();
$table->text('app_full_name_english')->nullable();
$table->text('sex')->nullable();
$table->text('sex_english')->nullable();
$table->text('place_of_birth')->nullable();
$table->text('place_of_birth_english')->nullable();
$table->text('permanent_address_place')->nullable();
$table->text('permanent_address_district')->nullable();
$table->text('permanent_address_ward')->nullable();
$table->text('local_permanent_address')->nullable();
$table->text('local_permanent_address_district')->nullable();
$table->text('local_permanent_address_ward')->nullable();
$table->text('date_of_birth')->nullable();
$table->text('date_of_birth_month')->nullable();
$table->text('date_of_birth_day')->nullable();
$table->text('date_of_birth_english')->nullable();
$table->text('date_of_birth_english_month')->nullable();
$table->text('date_of_birth_english_day')->nullable();
$table->text('name_of_father')->nullable();
$table->text('father_address')->nullable();
$table->text('father_citi')->nullable();
$table->text('name_of_mother')->nullable();
$table->text('mother_address')->nullable();
$table->text('mother_citi')->nullable();
$table->text('name_of_spouse')->nullable();
$table->text('spouse_address')->nullable();
$table->text('spouse_citi')->nullable();
$table->text('sam_name')->nullable();
$table->text('sam_address')->nullable();
$table->text('application_date')->nullable();
$table->text('local_add')->nullable();
$table->text('local_ward')->nullable();
$table->text('appsifaris_date')->nullable();
$table->text('app_cur_district')->nullable();
$table->text('app_cur_np')->nullable();
$table->text('guardian_name')->nullable();
$table->text('child_age')->nullable();
$table->text('child_name')->nullable();
$table->text('app_date')->nullable();
$table->text('sifaris_username')->nullable();
$table->text('sifaris_userpost')->nullable();
$table->text('local_add2')->nullable();
$table->text('local_ward2')->nullable();
$table->text('app_name')->nullable();
$table->text('app_name2')->nullable();
$table->text('app_age')->nullable();
$table->text('app_child')->nullable();
$table->text('application_date2')->nullable();
$table->text('off_name')->nullable();
$table->text('off_post')->nullable();
$table->text('nibedak')->nullable();
$table->text('nibedak_relation')->nullable();
$table->text('s_name')->nullable();
$table->text('s_nagarikta')->nullable();
$table->text('s_date')->nullable();
$table->text('s2_name')->nullable();

$table->text('s2_date')->nullable();
$table->text('sifaris_nibedan')->nullable();
$table->text('bitarit_num')->nullable();
$table->text('bitarit_date')->nullable();

$table->text('nibedak_name')->nullable();
$table->text('nibedak_address')->nullable();
$table->text('nibedak_citizenship_no')->nullable();
$table->text('nibedak_nid')->nullable();


$table->text('guardian_title')->nullable();
$table->text('child_type')->nullable();
$table->text('child_title')->nullable();
$table->text('nagarikta_type1')->nullable();
$table->text('relative_type')->nullable();
$table->text('relative_title')->nullable();
$table->text('nagarikta_type2')->nullable();
$table->text('nibedak_type')->nullable();
$table->text('nagarikta_type')->nullable();
$table->text('nagarikta_type3')->nullable();
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
        Schema::dropIfExists('citizencertificate');
    }
}
