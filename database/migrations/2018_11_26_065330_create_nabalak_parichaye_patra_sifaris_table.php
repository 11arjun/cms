<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNabalakParichayePatraSifarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nabalak_parichaye_patra_sifaris', function (Blueprint $table) {
            $table->increments('id');
            $table->text('patra_sankya')->nullable();
            $table->text('chalani_no')->nullable();
            $table->text('issued_date')->nullable();
            $table->text('office_address')->nullable();
            $table->text('nabalak_relation')->nullable();
            $table->text('nabalak_full_name')->nullable();
            $table->text('nabalak_full_name_english')->nullable();
            $table->text('sex')->nullable();
            $table->text('sex_english')->nullable();
            $table->text('place_of_birth')->nullable();
            $table->text('place_of_birth_english')->nullable();
            $table->text('father_name')->nullable();
            $table->text('father_name_english')->nullable();
            $table->text('mother_name')->nullable();
            $table->text('mother_name_english')->nullable();
            $table->text('guardian_name')->nullable();
            $table->text('guardian_name_english')->nullable();
            $table->text('guardian_address')->nullable();
            $table->text('pa_district')->nullable();
            $table->text('pa_palika')->nullable();
            $table->text('palika_option')->nullable();
            $table->text('pa_ward_no')->nullable();
            $table->text('date_of_birth')->nullable();
            $table->text('date_of_birth_ad')->nullable();
            $table->text('applicant_full_name')->nullable();
            $table->text('relation_with_applicant')->nullable();
            $table->text('application_date')->nullable();
            $table->text('sabik_address')->nullable();
            $table->text('first_person_title')->nullable();
            $table->text('first_person_name')->nullable();
            $table->text('second_person_title')->nullable();
            $table->text('second_person_name')->nullable();
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
        Schema::dropIfExists('nabalak_parichaye_patra_sifaris');
    }
}
