<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxClearancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_clearances', function (Blueprint $table) {
            $table->increments('id');
            $table->text('ref_no')->nullable();
            $table->text('issued_date')->nullable();
            $table->text('applicant_title')->nullable();
            $table->text('applicant_name')->nullable();
            $table->text('tax')->nullable();
            $table->text('plot_no')->nullable();
            $table->text('office_name')->nullable();
            $table->text('bs_date')->nullable();
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
        Schema::dropIfExists('tax_clearances');
    }
}
