<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTinpusteDetailBibaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tinpuste_detail_bibarans', function (Blueprint $table) {
            $table->increments('id');
            $table->text('tinpustedetail_id')->nullable();
            $table->text('name')->nullable();
            $table->text('relation')->nullable();
            $table->text('citizenship_no')->nullable();
            $table->text('citizenship_issued_date')->nullable();
            $table->text('citizenship_issued_district')->nullable();
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
        Schema::dropIfExists('tinpuste_detail_bibarans');
    }
}
