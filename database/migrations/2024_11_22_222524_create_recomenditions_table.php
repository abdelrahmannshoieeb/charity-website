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
        Schema::create('recomenditions', function (Blueprint $table) {
            $table->id();
            $table->boolean('status');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('institution_id')->constrained('institutions');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recomenditions');
    }
};
