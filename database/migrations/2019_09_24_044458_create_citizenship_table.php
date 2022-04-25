<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitizenshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizenship', function (Blueprint $table) {
            $table->increments('id');

 $table->string('karyalaya')->nullable();
 $table->string('dis_name')->nullable();

 $table->string('registrate_office_one')->nullable();
 $table->string('registrate_office_two')->nullable();
 $table->string('anchal_karyalaya')->nullable();
 $table->string('citi_no')->nullable();
 $table->string('citi_date')->nullable();
 $table->string('citi_type')->nullable();
 $table->string('name_nepali')->nullable();
 $table->string('name_english')->nullable();
 $table->string('gender_nepali')->nullable();
 $table->string('gender_english')->nullable();
 $table->string('birthplace_nepali')->nullable();
 $table->string('birthplace_english')->nullable();
 $table->string('citi_dis_name')->nullable();
 $table->string('citi_ward_no')->nullable();
 $table->string('citi_dis_english')->nullable();
 $table->string('citi_ward_english')->nullable();
 $table->string('year_nepali')->nullable();
 $table->string('month_nepali')->nullable();
 $table->string('day_nepali')->nullable();
 $table->string('year_english')->nullable();
 $table->string('month_english')->nullable();
 $table->string('day_english')->nullable();
 $table->string('father_name')->nullable();
 $table->string('father_citi_type')->nullable();
 $table->string('mother_name')->nullable();
 $table->string('mother_citi_type')->nullable();
 $table->string('spouse_name')->nullable();
 $table->string('spouse_citi_type')->nullable();
 $table->string('karyalaya_name')->nullable();
 $table->string('rasid_no')->nullable();

 $table->string('nibedak_names')->nullable();
 $table->string('nibedan_date')->nullable();
 $table->string('palika_name')->nullable();
 $table->string('palika_ward')->nullable();
 $table->string('palika_date')->nullable();
 $table->string('hal_palika')->nullable();
 $table->string('hal_ward')->nullable();
 $table->string('spouse_option_name')->nullable();
 $table->string('child_age')->nullable();
 $table->string('title_name')->nullable();
 $table->string('bibaran_no')->nullable();
 $table->string('bibaran_date')->nullable();
 $table->string('office_name')->nullable();

 $table->string('sifaris_name')->nullable();
 $table->string('sifaris_post')->nullable();
 $table->string('nibedak_name')->nullable();
 $table->string('nibedak_address')->nullable();
 $table->string('nibedak_citizenship_no')->nullable();
 $table->string('nibedak_nid')->nullable();
$table->string('bigrinuko_karan')->nullable();
$table->string('sakkal_nakkal')->nullable();
 $table->string('spouse_option')->nullable();
 $table->string('child_option')->nullable();
$table->string('title_option')->nullable();
$table->string('citi_reason')->nullable();
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
        Schema::dropIfExists('citizenship');
    }
}
