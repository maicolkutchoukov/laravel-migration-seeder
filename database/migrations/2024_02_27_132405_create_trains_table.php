<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 64);
            $table->string('station_start', 64)->nullable();
            $table->string('station_end', 64)->nullable();
            $table->dateTime('time_start', $precision = 0)->nullable();
            $table->dateTime('time_end', $precision = 0)->nullable();
            $table->string('code', 32)->nullable();
            $table->integer('carriages')->nullable();
            $table->boolean('in_time')->nullable();
            $table->boolean('cancelled')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};

/* 

Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato

*/
