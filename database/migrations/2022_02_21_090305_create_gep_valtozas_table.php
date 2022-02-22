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
        Schema::create('gep_valtozas', function (Blueprint $table) {
            $table->id();
$table->integer('eredetiId');
            $table->string('gyariszam');
            $table->string('allapot');
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
        Schema::dropIfExists('gep_valtozas');
    }
};