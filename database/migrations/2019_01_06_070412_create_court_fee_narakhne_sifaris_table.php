<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourtFeeNarakhneSifarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('court_fee_narakhne_sifaris', function (Blueprint $table) {
            $table->increments('id');
            $table->text('patra_sankhya')->nullable();
            $table->text('chalani_no')->nullable();
            $table->text('issued_date')->nullable();
            $table->text('local_state')->nullable();
            $table->text('state')->nullable();
            $table->text('sabik_address')->nullable();
            $table->text('applicant_title')->nullable();
            $table->text('applicant_name')->nullable();
            $table->text('relation_title')->nullable();
            $table->text('second_applicant_title')->nullable();
            $table->text('second_applicant_name')->nullable();
            $table->text('case_name')->nullable();
            $table->text('case_date')->nullable();
            $table->text('user_id')->nullable();
            $table->text('nibedak_name')->nullable();
            $table->text('nibedak_address')->nullable();
            $table->text('nibedak_citizenship_no')->nullable();
            $table->text('nibedak_nid')->nullable();
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
        Schema::dropIfExists('court_fee_narakhne_sifaris');
    }
}
