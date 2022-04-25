<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarakNameTharNagariktaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FarakNameTharNagarikta', function (Blueprint $table) {
            $table->increments('id');

$table->text('patra_sankya')->nullable();
$table->text('chalani_no')->nullable();
$table->text('issued_date')->nullable();
$table->text('letter_subject')->nullable();
$table->text('local_state')->nullable();
$table->text('ward')->nullable();
$table->text('sabik_address')->nullable();
$table->text('sabik_ward')->nullable();
$table->text('person_name')->nullable();
$table->text('citi_no')->nullable();
$table->text('citi_date')->nullable();
$table->text('mistake_info')->nullable();
$table->text('document_holder')->nullable();
$table->text('document_type')->nullable();
$table->text('document_mistake1')->nullable();
$table->text('document_name')->nullable();
$table->text('document_mistake2')->nullable();
$table->text('rel_name')->nullable();
$table->text('doc_name')->nullable();
$table->text('document_mistake3')->nullable();
$table->text('hakim_ko_name')->nullable();
$table->text('nibedak_name')->nullable();
$table->text('nibedak_address')->nullable();
$table->text('nibedak_citizenship_no')->nullable();
$table->text('nibedak_nid')->nullable();
$table->text('user_id')->nullable();
$table->text('sabik_type')->nullable();
$table->text('person_title')->nullable();
$table->text('mistake_type')->nullable();
$table->text('relation_type')->nullable();
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
        Schema::dropIfExists('FarakNameTharNagarikta');
    }
}
