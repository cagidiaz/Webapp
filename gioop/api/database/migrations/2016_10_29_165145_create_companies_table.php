<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nif')->unique();
            $table->string('address');
            $table->string('postal_c', '5');

            $table->unsignedInteger('cat_id');
            $table->foreign('cat_id')->references('id')->on('categs');

            $table->string('phone');
            $table->string('email');
            $table->double('s_lat');
            $table->double('s_long');
            $table->string('s_url')->nullable();
            $table->unsignedInteger('discount');
            $table->string('logo')->nullable();
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
        Schema::drop('stores');
    }
}
