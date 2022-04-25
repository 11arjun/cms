<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNataPramanitDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nata_pramanit_details', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nata_id')->nullable();
            $table->text('relative_name')->nullable();
            $table->text('relation')->nullable();
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
        Schema::dropIfExists('nata_pramanit_details');
    }
}
