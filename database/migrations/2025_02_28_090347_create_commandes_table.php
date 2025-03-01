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
     
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('heure');
            $table->boolean('regle');

            $table->foreignId('mode_reglement_id')->constrained();
            $table->foreignId('etat_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
