<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitizensifarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizensifaris', function (Blueprint $table) {
            $table->increments('id');
            
$table->text('patra_sankya')->nullable();
$table->text('chalani_no')->nullable();
$table->text('issued_date')->nullable();
$table->text('dis_name')->nullable();
$table->text('letter_subject')->nullable();
$table->text('n_name')->nullable();
$table->text('birth_place')->nullable();
$table->text('father_name')->nullable();
$table->text('mother_name')->nullable();
$table->text('patipatni_name')->nullable();
$table->text('per_add')->nullable();
$table->text('person_name')->nullable();
$table->text('birth_date')->nullable();
$table->text('toli_ko_name')->nullable();
$table->text('nibedan_name')->nullable();
$table->text('nibedan_relation')->nullable();
$table->text('sanakhat_name')->nullable();
$table->text('sanakhat_relation')->nullable();
$table->text('sanakhat_date')->nullable();
$table->text('nibedak_name')->nullable();
$table->text('nibedak_address')->nullable();
$table->text('nibedak_citizenship_no')->nullable();
$table->text('nibedak_nid')->nullable();

$table->text('nibedak_options')->nullable();
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
        Schema::dropIfExists('citizensifaris');
    }
}
