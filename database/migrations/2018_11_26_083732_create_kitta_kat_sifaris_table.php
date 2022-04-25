<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKittaKatSifarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('kitta_kat_sifaris', function (Blueprint $table) {
            $table->increments('id');
            $table->text('patra_sankya')->nullable();
            $table->text('chalani_no')->nullable();
            $table->text('issued_date')->nullable();
            $table->text('office_chairman')->nullable();
            $table->text('office_name')->nullable();
            $table->text('sabik_address')->nullable();
            $table->text('person_title')->nullable();
            $table->text('person_name')->nullable();
            $table->text('jagga_location')->nullable();
            $table->text('jagga_area')->nullable();
            $table->text('ghaderi_area')->nullable();
            $table->text('ghar_total_area')->nullable();
            $table->text('last_floor_area')->nullable();
            $table->text('paune_far')->nullable();
            $table->text('sifaris_reason')->nullable();
            $table->text('technician_name')->nullable();
            $table->text('user_id')->nullable();
            $table->text('nibedak_name')->nullable();
            $table->text('nibedak_address')->nullable();
            $table->text('nibedak_citizenship_no')->nullable();
            $table->text('nibedak_nid')->nullable();
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
          Schema::dropIfExists('kitta_kat_sifaris');
    }
}
