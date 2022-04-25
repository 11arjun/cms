<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirthcertificateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birthcertificate', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reg_no_nep')->nullable();
            $table->string('form_no_nep')->nullable();
            $table->string('reg_date_nep')->nullable();
            $table->string('applicant_title_options')->nullable();
            $table->string('applicant_name_nep')->nullable();
            $table->string('grand_father_name_nep')->nullable();
          $table->string('grand_children_options')->nullable();
          $table->string('father_name_nep')->nullable();
         $table->string('mother_name_nep')->nullable();
         $table->string('children_options')->nullable();
         $table->string('children_relation_options')->nullable();
         $table->string('holder_name_nep')->nullable();
         $table->string('birth_date_bs_nep')->nullable();
         $table->string('father_citizen_no_nep')->nullable();
         $table->string('father_citizen_issued_date_nep')->nullable();
         $table->string('father_citizen_issued_district_nep')->nullable();
         $table->string('mother_citizen_no_nep')->nullable();
         $table->string('mother_citizen_issued_date_nep')->nullable();
         $table->string('mother_citizen_issued_district_nep')->nullable();
         $table->string('local_registrar_name_nep')->nullable();
         $table->string('signed_date_nep')->nullable();
        

          $table->string('reg_no')->nullable();
            $table->string('form_no')->nullable();
            $table->string('reg_date')->nullable();
            $table->string('applicant_title_options_eng')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('grand_father_name')->nullable();
          $table->string('grand_children_options_eng')->nullable();
          $table->string('father_name')->nullable();
         $table->string('mother_name')->nullable();
         $table->string('children_options_eng')->nullable();
         $table->string('children_relation_options_eng')->nullable();
         $table->string('spouse_name')->nullable();
         $table->string('birth_date_bs')->nullable();
         $table->string('father_citizen_issued_date')->nullable();
         $table->string('father_citizen_no')->nullable();
         
         $table->string('father_citizen_issued_district')->nullable();
         $table->string('mother_citizen_no')->nullable();
         $table->string('mother_citizen_issued_date')->nullable();
         $table->string('mother_citizen_issued_district')->nullable();
         $table->string('local_registrar_name')->nullable();
          $table->string('user_id')->nullable();
         $table->string('signed_date')->nullable();
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
        Schema::dropIfExists('birthcertificate');
    }
}
