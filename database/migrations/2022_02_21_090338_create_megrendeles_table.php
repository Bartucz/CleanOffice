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
        Schema::create('megrendeles', function (Blueprint $table) {
            $table->id();
            $table->dateTime('datumtol');
            $table->dateTime('datumig');
            $table->string('allapot');
            $table->foreignId('felhasznalo')->references('id')->on('users');
            $table->foreignId('csoport')->references('id')->on('csoports');
            $table->foreignId('gep')->references('id')->on('geps');
            $table->foreignId('auto')->references('id')->on('autos');
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
        Schema::dropIfExists('megrendeles');
    }
};
