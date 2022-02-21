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
        Schema::create('user_valtozas', function (Blueprint $table) {
            $table->id();
		    $table->integer('eredetiId');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('telefon');
            $table->string('cegnev');
            $table->string('cim');
            $table->boolean('aktive');
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
        Schema::dropIfExists('user_valtozas');
    }
};
