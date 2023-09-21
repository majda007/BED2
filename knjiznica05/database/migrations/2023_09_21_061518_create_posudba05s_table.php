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
        Schema::create('posudba05s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_clan')->constrained('clan05s');
            $table->foreignId('id_knjiga')->constrained('knjiga05s');
            $table->date('dat_posudbe');
            $table->date('dat_vracanja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posudba05s');
    }
};
