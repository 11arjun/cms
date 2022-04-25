<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressverificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addressverification', function (Blueprint $table) {
            $table->increments('id');
            $table->text('ref_no')->nullable();
            $table->text('issued_date')->nullable();
            $table->text('title_options')->nullable();
            $table->text('applicant_name')->nullable();
            $table->text('previous_vdc_name')->nullable();
            $table->text('previous_ward_no')->nullable();
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
        Schema::dropIfExists('addressverification');
    }
}
