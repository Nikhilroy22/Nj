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
        Schema::create('betings', function (Blueprint $table) {
            $table->id();
            $table->text('team1');
            $table->string('team2');
            $table->decimal('team1_odds', 15, 2);
            $table->decimal('team2_odds', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('betings');
    }
};
