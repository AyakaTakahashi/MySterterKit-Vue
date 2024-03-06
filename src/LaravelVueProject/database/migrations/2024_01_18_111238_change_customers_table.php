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
        Schema::table('customers', function (Blueprint $table) {
            $table->integer('sex')->nullable(true)->change();
            $table->integer('postcode')->nullable(true)->change();
            $table->string('prefecture')->nullable(true)->change();
            $table->string('city')->nullable(true)->change();
            $table->string('address')->nullable(true)->change();
            $table->date('birthday')->nullable(true)->change();
            $table->string('picture')->nullable(true)->change();
            $table->string('notes')->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->integer('sex')->nullable(false)->change();
            $table->integer('postcode')->nullable(false)->change();
            $table->string('prefecture')->nullable(false)->change();
            $table->string('city')->nullable(false)->change();
            $table->string('address')->nullable(false)->change();
            $table->date('birthday')->nullable(false)->change();
            $table->string('picture')->nullable(false)->change();
            $table->string('notes')->nullable(false)->change();
        });
    }
};
