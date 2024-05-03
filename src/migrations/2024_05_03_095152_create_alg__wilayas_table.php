<?php

use Abdo\AlgeriaWilaya\Services\AlgeriaWilayaService;
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
    public function up(): void
    {
        Schema::create('alg__wilayas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('arabic_name');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });

        
        AlgeriaWilayaService::seedWilayas();        
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('alg__wilayas');
    }
};
