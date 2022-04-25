<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarriageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marriage', function (Blueprint $table) {
            $table->increments('id');
           
$table->text('reg_no_nep')->nullable();
$table->text('form_no_nep')->nullable();
$table->text('reg_date_nep')->nullable();
$table->text('applicant_name_nep')->nullable();
$table->text('wife_name_nep')->nullable();
$table->text('grand_father_name_nep')->nullable();
$table->text('father_name_nep')->nullable();
$table->text('applicant_age_nep')->nullable();
$table->text('husband_name_nep')->nullable();
$table->text('girls_grand_father_name_nep')->nullable();
$table->text('girls_father_name_nep')->nullable();
$table->text('girls_provience_nep')->nullable();
$table->text('girls_district_nep')->nullable();
$table->text('girls_local_state_nep')->nullable();
$table->text('girls_ward_no_nep')->nullable();
$table->text('girls_age_nep')->nullable();
$table->text('girls_name_nep')->nullable();
$table->text('date_bs_nep')->nullable();
$table->text('date_ad_nep')->nullable();
$table->text('bride_citizen_no_nep')->nullable();
$table->text('bride_citizen_issued_date_nep')->nullable();
$table->text('bride_citizen_issued_district_nep')->nullable();
$table->text('bridegroom_citizen_no_nep')->nullable();
$table->text('bridegroom_citizen_issued_date_nep')->nullable();
$table->text('bridegroom_citizen_issued_district_nep')->nullable();
$table->text('local_registrar_name_nep')->nullable();
$table->text('signed_date_nep')->nullable();
$table->text('reg_no')->nullable();
$table->text('form_no')->nullable();
$table->text('reg_date')->nullable();
$table->text('applicant_name')->nullable();
$table->text('wife_name')->nullable();
$table->text('husband_name')->nullable();
$table->text('husband_age')->nullable();
$table->text('father_name')->nullable();
$table->text('grand_father_name')->nullable();
$table->text('girls_name')->nullable();
$table->text('girls_age')->nullable();
$table->text('girls_father_name')->nullable();
$table->text('girls_grand_father_name')->nullable();
$table->text('girls_ward_no')->nullable();
$table->text('girls_local_state')->nullable();
$table->text('girls_district')->nullable();
$table->text('girls_provience')->nullable();
$table->text('date_bs')->nullable();
$table->text('date_ad')->nullable();
$table->text('bride_citizen_issued_date')->nullable();
$table->text('bride_citizen_issued_district')->nullable();
$table->text('bride_citizen_no')->nullable();
$table->text('bridegroom_citizen_issued_date')->nullable();
$table->text('bridegroom_citizen_issued_district')->nullable();
$table->text('bridegroom_citizen_no')->nullable();
$table->text('local_registrar_name')->nullable();
$table->text('signed_date')->nullable();
$table->text('nibedak_name')->nullable();
$table->text('nibedak_address')->nullable();
$table->text('nibedak_citizenship_no')->nullable();
$table->text('nibedak_nid')->nullable();
$table->text('user_id')->nullable();
$table->text('save_marrige_certification_data')->nullable();

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
        Schema::dropIfExists('marriage');
    }
}
