<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerificationOfAnnualIncomeTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verification_of_annual_income', function (Blueprint $table) {
            $table->increments('id');
            $table->text('ref_no')->nullable();
            $table->text('issued_date')->nullable();
            $table->text('person_title')->nullable();
            $table->text('person_name')->nullable();
            $table->text('address')->nullable();
            $table->text('total_income')->nullable();
            $table->text('applicant_relation')->nullable();
            $table->text('parties_name')->nullable();
            $table->text('annual_income')->nullable();
            $table->text('remarks')->nullable();
            $table->text('total_nepali_rs')->nullable();
            $table->text('total_us_dollar')->nullable();
            $table->text('us_dollar')->nullable();
            $table->text('officer_title')->nullable();
            $table->text('officer_name')->nullable();
           
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
        Schema::dropIfExists('verification_of_annual_income');
    }
}
