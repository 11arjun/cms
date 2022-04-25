<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeathcertificateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deathcertificate', function (Blueprint $table) {
            $table->increments('id');
            $table->string('registration_no_nep')->nullable();
            $table->string('registration_date_nep')->nullable();
            $table->string('family_form_no_nep')->nullable();
            $table->string('applicant_title_nep')->nullable();
            $table->string('applicant_name_nep')->nullable();
            $table->string('grand_father_name_nep')->nullable();
            $table->string('grand_children_option_nep')->nullable();
            $table->string('father_name_nep')->nullable();
            $table->string('children_option_nep')->nullable();
            $table->string('children_name_nep')->nullable();
            $table->string('spouse_option_nep')->nullable();
            $table->string('province_name_nep')->nullable();
            $table->string('district_name_nep')->nullable();
            $table->string('local_state_name_nep')->nullable();
            $table->string('ward_no_nep')->nullable();
            $table->string('age_nep')->nullable();
            $table->string('person_title_nep')->nullable();
             $table->string('person_name_nep')->nullable();
            $table->string('death_date_bs_nep')->nullable();
            $table->string('death_place_local_state_nep')->nullable();
            $table->string('death_place_ward_nep')->nullable();
            $table->string('citizenship_no_nep')->nullable();
            $table->string('issued_date_nep')->nullable();
            $table->string('issued_district_nep')->nullable();
            $table->string('local_registar_name_nep')->nullable();
            $table->string('signed_date_nep')->nullable();
            $table->string('registration_no')->nullable();
            $table->string('registration_date')->nullable();
            $table->string('family_form_no')->nullable();
            $table->string('applicant_title')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('death_person_title')->nullable();
            $table->string('death_person_name')->nullable();
            $table->string('death_person_age')->nullable();
            $table->string('children_option')->nullable();
            $table->string('father_title_option')->nullable();
            $table->string('father_name')->nullable();
            $table->string('spouse_option')->nullable();
            $table->string('husband_wife_title')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('ward_no')->nullable();
            $table->string('local_state')->nullable();
            $table->string('district')->nullable();
            $table->string('province')->nullable();
            $table->string('death_date_bs')->nullable();
            $table->string('citizenship_no')->nullable();
            $table->string('issued_date')->nullable();
            $table->string('issued_district')->nullable();
            $table->string('local_registar_name')->nullable();
            $table->string('signed_date')->nullable();
             $table->string('user_id')->nullable();
           $table->string('nibedak_name')->nullable();
         $table->string('nibedak_address')->nullable();
         $table->string('nibedak_citizenship_no')->nullable();
         $table->string('nibedak_nid')->nullable();

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
        Schema::dropIfExists('deathcertificate');
    }
}
