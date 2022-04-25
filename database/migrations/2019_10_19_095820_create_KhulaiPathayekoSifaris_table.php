<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhulaiPathayekoSifarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('KhulaiPathayekoSifaris', function (Blueprint $table) {
            $table->increments('id');
 $table->text('patra_sankya')->nullable();
 $table->text('chalani_no')->nullable();
 $table->text('issued_date')->nullable();
 $table->text('letter_subject')->nullable();
 $table->text('office_chairman')->nullable();
 $table->text('office_address')->nullable();
 $table->text('letter_date')->nullable();
 $table->text('letter_chalani_no')->nullable();
 $table->text('hakim_ko_name')->nullable();
 $table->text('nibedak_name')->nullable();
 $table->text('nibedak_address')->nullable();
 $table->text('nibedak_citizenship_no')->nullable();
 $table->text('nibedak_nid')->nullable();
 $table->text('user_id')->nullable();
$table->text('officer')->nullable();
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
        Schema::dropIfExists('KhulaiPathayekoSifaris');
    }
}
