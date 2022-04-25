<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationVerificationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_verification_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('relation_id')->nullable();
            $table->text('relative_title')->nullable();
            $table->text('relative_name')->nullable();
            $table->text('relation')->nullable();
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
        Schema::dropIfExists('relation_verification_details');
    }
}
