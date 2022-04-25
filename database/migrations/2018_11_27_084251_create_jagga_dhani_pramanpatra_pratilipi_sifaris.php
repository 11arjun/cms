<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJaggaDhaniPramanpatraPratilipiSifaris extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('jagga_dhani_pramanpatra_pratilipi_sifaris', function (Blueprint $table) {
            $table->increments('id');
            $table->text('patra_sankya')->nullable();
            $table->text('chalani_no')->nullable();
            $table->text('issued_date')->nullable();
            $table->text('office_chairman')->nullable();
            $table->text('office_name')->nullable();
            $table->text('land_owner_title')->nullable();
            $table->text('land_owner_name')->nullable();
            $table->text('palika_name')->nullable();
            $table->text('palika_type')->nullable();
            $table->text('ward_no')->nullable();
            $table->text('sabik_address')->nullable();
            $table->text('kitta_no')->nullable();
            $table->text('area')->nullable();
            $table->text('person_sabik_address')->nullable();
            $table->text('applicant_title')->nullable();
            $table->text('applicant_name')->nullable();
            $table->text('citizenship_no')->nullable();
            $table->text('citizenship_issued_date')->nullable();
            $table->text('father_name')->nullable();
            $table->text('grand_father_name')->nullable();
            

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
         Schema::dropIfExists('jagga_dhani_pramanpatra_pratilipi_sifaris');
    }
}
