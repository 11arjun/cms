<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarriageVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marriage_verifications', function (Blueprint $table) {
            $table->increments('id');
            $table->text('patra_sankya')->nullable();
            $table->text('chalani_no')->nullable();
            $table->text('issued_date')->nullable();
            $table->text('boy_grand_father')->nullable();
            $table->text('boy_father')->nullable();
            $table->text('boy_mother')->nullable();
            $table->text('boy_name')->nullable();
            $table->text('boy_previous_address')->nullable();
            $table->text('girl_grand_father')->nullable();
            $table->text('girl_grand_mother')->nullable();
            $table->text('girl_father')->nullable();
            $table->text('girl_mother')->nullable();
            $table->text('girl_name')->nullable();
            $table->text('girl_previous_address')->nullable();
            $table->text('marriage_date')->nullable();
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
        Schema::dropIfExists('marriage_verifications');
    }
}
