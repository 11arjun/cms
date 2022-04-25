<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNonprofitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nonprofit', function (Blueprint $table) {
            $table->increments('id');
            
 $table->text('patra_sankhya')->nullable();
 $table->text('chalani_no')->nullable();
 $table->text('issued_date')->nullable();
 $table->text('letter_subject')->nullable();
 $table->text('registration_no')->nullable();
 $table->text('registration_date')->nullable();
 $table->text('organization_name')->nullable();
 $table->text('organization_address')->nullable();
 $table->text('subjective_area')->nullable();
 $table->text('transaction_start_date')->nullable();
 $table->text('organization_email')->nullable();
 $table->text('organization_contact')->nullable();
 $table->text('chairman_name')->nullable();
 $table->text('chairman_address')->nullable();
 $table->text('chairman_email')->nullable();
 $table->text('chairman_contact_no')->nullable();
 $table->text('hakim_ko_name')->nullable();
 $table->text('nibedak_name')->nullable();
 $table->text('nibedak_address')->nullable();
 $table->text('nibedak_citizenship_no')->nullable();
 $table->text('nibedak_nid')->nullable();
 $table->text('user_id')->nullable();
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
        Schema::dropIfExists('nonprofit');
    }
}
