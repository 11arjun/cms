<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNirmanBebasayeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NirmanBebasaye', function (Blueprint $table) {
            $table->increments('id');

 $table->text('ejajat_patra_no')->nullable();
 $table->text('fiscal_year')->nullable();
 $table->text('location')->nullable();
 $table->text('company_name')->nullable();
 $table->text('ejajat_dineko_name')->nullable();
 $table->text('post')->nullable();
 $table->text('issued_date')->nullable();
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
        Schema::dropIfExists('NirmanBebasaye');
    }
}
