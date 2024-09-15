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
        Schema::create('yacht_photos', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('cabin')->nullable();
            $table->string('blueprint')->nullable();
            $table->foreignId('yacht_id')->constrained()->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yacht_photos');
    }
};
