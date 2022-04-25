<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSadakKhaneSifaris extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('sadak_khane_sifaris', function (Blueprint $table) {
            $table->increments('id');
            $table->text('patra_sankya')->nullable();
            $table->text('chalani_no')->nullable();
            $table->text('issued_date')->nullable();
            $table->text('person_title')->nullable();
            $table->text('person_name')->nullable();
            $table->text('application_submit_date')->nullable();
            $table->text('sadak_location')->nullable();
            $table->text('work_complete_days')->nullable();
            $table->text('swikrit_sadak_name')->nullable();
            $table->text('swikrit_pradan_unit')->nullable();
            $table->text('deposite_amount')->nullable();
            $table->text('applicant_address')->nullable();
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
        Schema::dropIfExists('sadak_khane_sifaris');
    }
}
