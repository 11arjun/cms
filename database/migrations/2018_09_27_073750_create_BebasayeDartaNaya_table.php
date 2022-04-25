<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBebasayeDartaNayaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BebasayeDartaNaya', function (Blueprint $table) {
            $table->increments('id');
            
$table->text('p_name')->nullable();
$table->text('p_office')->nullable();
$table->text('p_ward')->nullable();
$table->text('p_address')->nullable();
$table->text('letter_subject')->nullable();
$table->text('bebasaye_name')->nullable();
$table->text('bebasaye_name_english')->nullable();
$table->text('bebasaye_district')->nullable();
$table->text('bebasaye_local_state')->nullable();
$table->text('bebasaye_wardno')->nullable();
$table->text('bebasaye_tole')->nullable();
$table->text('bebasaye_phone')->nullable();
$table->text('bebasaye_amount')->nullable();
$table->text('bebasaye_amount_english')->nullable();
$table->text('bebasaye_item')->nullable();
$table->text('prop_name')->nullable();
$table->text('prop_jilla')->nullable();
$table->text('prop_localstate')->nullable();
$table->text('prop_ward')->nullable();
$table->text('prop_tole')->nullable();
$table->text('prop_phone')->nullable();
$table->text('prop_citi_no')->nullable();
$table->text('prop_citi_jilla')->nullable();
$table->text('citi_date')->nullable();
$table->text('prop_dis')->nullable();
$table->text('prop_local_state')->nullable();
$table->text('prop_wada')->nullable();
$table->text('prop_tole_name')->nullable();
$table->text('prop_grand')->nullable();
$table->text('prop_father')->nullable();
$table->text('prop_husband')->nullable();
$table->text('owner_prop')->nullable();

$table->text('owner_grandfather')->nullable();
$table->text('owner_grandchild')->nullable();
$table->text('owner_add')->nullable();
$table->text('owner_age')->nullable();
$table->text('owner_name')->nullable();
$table->text('owner_business')->nullable();
$table->text('business_localaddress')->nullable();
$table->text('business_ward')->nullable();
$table->text('b_year')->nullable();
$table->text('b_month')->nullable();
$table->text('b_day')->nullable();
$table->text('b_roj')->nullable();
$table->text('san_localstate')->nullable();
$table->text('san_ward')->nullable();
$table->text('san_name')->nullable();
$table->text('san_date')->nullable();
$table->text('tip_business')->nullable();
$table->text('tip_owner')->nullable();
$table->text('tip_amt')->nullable();
$table->text('tip_amount')->nullable();

$table->text('nibedak_name')->nullable();
$table->text('nibedak_address')->nullable();
$table->text('nibedak_citizenship_no')->nullable();
$table->text('nibedak_nid')->nullable();
$table->text('user_id')->nullable();


$table->text('b_type')->nullable();
$table->text('owner_child')->nullable();
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
        Schema::dropIfExists('BebasayeDartaNaya');
    }
}
