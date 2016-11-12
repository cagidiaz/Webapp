<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('company_id')->unique();
            $table->foreign('company_id')->references('id')->on('companies');
            
            $table->string('days');
            $table->dateTime('date_mor_ini');
            $table->dateTime('date_mor_end');
            $table->dateTime('date_aft_ini');
            $table->dateTime('date_aft_end');
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
        Schema::drop('timetables');
    }
}
