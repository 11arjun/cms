<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharKillaPramanitTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('char_killa_pramanit', function (Blueprint $table) {
            $table->increments('id');
            $table->text('patra_sankya')->nullable();
            $table->text('chalani_no')->nullable();
            $table->text('issued_date')->nullable();
            $table->text('sabik_address')->nullable();
            $table->text('person_title')->nullable();
            $table->text('person_name')->nullable();
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
       Schema::dropIfExists('char_killa_pramanit');
    }
}
