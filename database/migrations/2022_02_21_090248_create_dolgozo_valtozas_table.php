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
        Schema::create('dolgozo_valtozas', function (Blueprint $table) {
            $table->id();
            $table->integer('eredetiId');
                        $table->string('nev');
                        $table->string('telefon');
                        $table->string('allapot');
                        $table->boolean('sofore');
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
        Schema::dropIfExists('dolgozo_valtozas');
    }
};
