<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternalMigrationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internal_migration_details', function (Blueprint $table) {
            $table->increments('id');
            $table->text('migration_id')->nullable();
            $table->text('full_name')->nullable();
            $table->text('relation')->nullable();
            $table->text('citizenship_no')->nullable();
            $table->text('ghar_no')->nullable();
            $table->text('batto_name')->nullable();
            $table->text('age')->nullable();
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
        Schema::dropIfExists('internal_migration_details');
    }
}
