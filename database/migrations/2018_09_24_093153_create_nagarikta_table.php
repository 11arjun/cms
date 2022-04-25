<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNagariktaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nagarikta', function (Blueprint $table) {
            $table->increments('id');
            
$table->text('issued_date')->nullable();
$table->text('karyalaya')->nullable();
$table->text('ward_num')->nullable();
$table->text('letter_subject1')->nullable();
$table->text('letter_subject2')->nullable();
$table->text('district_name')->nullable();
$table->text('loc_name')->nullable();
$table->text('ward_no')->nullable();
$table->text('grand_name')->nullable();
$table->text('parent_name')->nullable();
$table->text('dob')->nullable();
$table->text('age')->nullable();
$table->text('app_name')->nullable();
$table->text('n_type')->nullable();
$table->text('n_name')->nullable();
$table->text('n_address')->nullable();
$table->text('n_date')->nullable();
$table->text('nibedak_name')->nullable();
$table->text('nibedak_address')->nullable();
$table->text('nibedak_citizenship_no')->nullable();
$table->text('nibedak_nid')->nullable();
$table->text('ng_option')->nullable();
$table->text('child_option')->nullable();
$table->text('ch_option')->nullable();
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
        Schema::dropIfExists('nagarikta');
    }
}
