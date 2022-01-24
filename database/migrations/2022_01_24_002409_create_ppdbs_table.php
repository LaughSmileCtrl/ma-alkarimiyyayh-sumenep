<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpdbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nisn');
            $table->string('nik');
            $table->string('no_kk');
            $table->string('place_of_birth');
            $table->datetime('date_of_birth');
            $table->string('gender');
            $table->string('child_order');
            $table->string('total_brother');
            $table->string('phone');
            $table->text('address');
            $table->string('father_name');
            $table->string('father_nik');
            $table->string('father_place_of_birth');
            $table->datetime('father_date_of_birth');
            $table->string('father_last_education');
            $table->string('father_profession');
            $table->string('father_phone');
            $table->text('father_address');
            $table->string('mother_name');
            $table->string('mother_nik');
            $table->string('mother_place_of_birth');
            $table->datetime('mother_date_of_birth');
            $table->string('mother_last_education');
            $table->string('mother_profession');
            $table->string('mother_phone');
            $table->text('mother_address');
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
        Schema::dropIfExists('ppdbs');
    }
}
