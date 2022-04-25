<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLetterHeadInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_head_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('palika_id');
            $table->integer('ward_id');
            $table->string("ward_no_eng");
            $table->string("ward_no_nep");
            $table->string("phone_no_eng");
            $table->string("phone_no_nep");
            $table->string("fax_eng");
            $table->string("fax_nep");
            $table->string("ward_name_eng");
            $table->string("ward_name_nep");
            $table->string("fiscal_year_eng");
            $table->string("fiscal_year_nep");
            $table->string("email");
            $table->string("website");
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
        Schema::dropIfExists('letter_head_info');
    }
}
