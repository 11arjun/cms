<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralSifarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GeneralSifaris', function (Blueprint $table) {
            $table->increments('id');
            $table->text('patra_sankhya')->nullable();
 $table->text('chalani_no')->nullable();
 $table->text('issued_date')->nullable();
 $table->text('office_name')->nullable();
 $table->text('office_address')->nullable();
 $table->text('office_address2')->nullable();
 $table->text('subject')->nullable();
 $table->text('letter_subject')->nullable();
 $table->text('hakim_ko_name')->nullable();
 $table->text('nibedak_name')->nullable();
 $table->text('nibedak_address')->nullable();
 $table->text('nibedak_citizenship_no')->nullable();
 $table->text('nibedak_nid')->nullable();

$table->text('officer')->nullable();

$table->text('behora')->nullable();
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
        Schema::dropIfExists('GeneralSifaris');
    }
}
