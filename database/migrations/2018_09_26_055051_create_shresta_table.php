<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShrestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shresta', function (Blueprint $table) {
            $table->increments('id');
            $table->text('patra_sankya')->nullable();
$table->text('chalani_no')->nullable();
$table->text('issued_date')->nullable();
$table->text('letter_subject')->nullable();
$table->text('office_name')->nullable();
$table->text('office_address')->nullable();
$table->text('local_state')->nullable();
$table->text('ward')->nullable();
$table->text('sabik_address')->nullable();
$table->text('sabik_ward')->nullable();
$table->text('grand_father')->nullable();
$table->text('father')->nullable();
$table->text('child_name')->nullable();
$table->text('prop_type')->nullable();
// start here
$table->text('sabik_vdc_name')->nullable();
$table->text('sabik_ward_no')->nullable();
$table->text('nagarpalika_name')->nullable();
$table->text('ward_no')->nullable();
$table->text('kitta_no')->nullable();
$table->text('area')->nullable();
// end
$table->text('hakim_ko_name')->nullable();

$table->text('nibedak_name')->nullable();
$table->text('nibedak_address')->nullable();
$table->text('nibedak_citizenship_no')->nullable();
$table->text('nibedak_nid')->nullable();

$table->text('jagga_dhani')->nullable();
$table->text('sabik_type')->nullable();
$table->text('grand_child')->nullable();
$table->text('child')->nullable();
$table->text('sabik')->nullable();
$table->text('officer')->nullable();
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
        Schema::dropIfExists('shresta');
    }
}
