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
        

        Schema::create('details_achats', function (Blueprint $table) {
            $table->id();
            $table->double('quantite');
            $table->double('prix_ht');
            $table->double('tva');

            $table->foreignId('achat_id')->constrained();
            $table->foreignId('produit_id')->constrained();
            
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details_achats');
    }
};
