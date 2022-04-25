<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKakshyaThap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('kakshyathap', function (Blueprint $table) {
          $table->increments('id');
          $table->text('patra_shankhya')->nullable();
          $table->text('chalani_no')->nullable();
          $table->text('issued_date')->nullable();
          $table->text('officer_name')->nullable();
          $table->text('related_name')->nullable();
          $table->text('option')->nullable();
          $table->text('school_name')->nullable();
          $table->string('user_id')->nullable();
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
          Schema::dropIfExists('kakshyathap');
    }
}
