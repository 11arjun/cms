<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScholarshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Scholarship', function (Blueprint $table) {
            $table->increments('id');
            $table->text('patra_sankhya')->nullable();
 $table->text('chalani_no')->nullable();
 $table->text('issued_date')->nullable();
 $table->text('letter_subject')->nullable();
 $table->text('local_state')->nullable();
 $table->text('sabik_address')->nullable();
 $table->text('sabik_ward')->nullable();
 $table->text('father_name')->nullable();
 $table->text('mother_name')->nullable();
 $table->text('children_name')->nullable();
 $table->text('hakim_ko_name')->nullable();
 $table->text('nibedak_name')->nullable();
 $table->text('nibedak_address')->nullable();
 $table->text('nibedak_citizenship_no')->nullable();
 $table->text('nibedak_nid')->nullable();


$table->text('sabik_type')->nullable();
 $table->text('address_type')->nullable();
 $table->text('economy_type')->nullable();
 $table->text('children_gender')->nullable();
 $table->text('children_title')->nullable();
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
        Schema::dropIfExists('Scholarship');
    }
}
