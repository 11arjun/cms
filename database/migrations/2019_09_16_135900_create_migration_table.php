<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('migration', function (Blueprint $table) {
            $table->increments('id');


$table->string('registration_no'); 
$table->string('family_form_no'); 
 $table->string('registration_date');
 $table->string('applicant_name');
 $table->string('house_owner_name');
 $table->string('migrate_date');
 $table->string('migrate_province_name');
 $table->string('issued_district');
 $table->string('migrate_local_state');
 $table->string('migrate_ward');

 $table->string('family_member_name');
 $table->string('date_of_birth');
 $table->string('relation');
 $table->string('event_registration');
 $table->string('remakrs');

 $table->string('citizenship_no');
 $table->string('issued_date');
 $table->string('issued_districts');
 $table->string('local_registar_name');
 $table->string('signed_date');
 $table->string('reg_no');
$table->string('form_no');
$table->string('reg_date');
 $table->string('applicant_name_eng');
 $table->string('house_owner_name_eng');
 $table->string('mig_ward_eng');
 $table->string('mig_local_state_eng');
 $table->string('mig_district_eng');
 $table->string('mig_provience_name_eng');
 $table->string('family_member_name_eng');
 $table->string('date_of_birth_eng');
 $table->string('relation_eng');
 $table->string('event_reg_eng');
 $table->string('remarks_eng');
 $table->string('citizen_no_eng');
  $table->string('issued_date_eng');
  $table->string('issued_district_eng');
  $table->string('local_registar_name_eng');
  $table->string('nibedak_name');
  $table->string('nibedak_address');
  $table->string('nibedak_citizenship_no');
  $table->string('nibedak_nid');
  $table->string('user_id');
  $table->string('migrate_type');
$table->string('applicant_title');
$table->string('applicant_title2');
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
        Schema::dropIfExists('migration');
    }
}
