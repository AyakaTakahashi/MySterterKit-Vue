<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('family_name');
            $table->string('first_name');
            $table->integer('sex');
            $table->integer('postcode');
            $table->string('prefecture');
            $table->string('city');
            $table->string('address');
            $table->integer('phone_number');
            $table->date('birthday');
            $table->string('picture');
            $table->string('notes');
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
        Schema::dropIfExists('customers');
    }
};
