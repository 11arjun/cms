<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNepalSarkarkoNaammaBatoKayemSifarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nepalsarkarko_naamma_bato_kayem_sifaris', function (Blueprint $table) {
            $table->increments('id');
           
            $table->text('patra_sankya')->nullable();
            $table->text('chalani_no')->nullable();
            $table->text('issued_date')->nullable();
            $table->text('office_chairman')->nullable();
            $table->text('office_name')->nullable();
            $table->text('sabik_address')->nullable();
            $table->text('palika_type')->nullable();
            $table->text('kitta_no')->nullable();
            $table->text('area')->nullable();
            $table->text('jagga_breadth')->nullable();
            $table->text('jagga_length')->nullable();
            $table->text('person_title')->nullable();
            $table->text('person_name')->nullable();
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
        Schema::dropIfExists('nepalsarkarko_naamma_bato_kayem_sifaris');
    }
}
