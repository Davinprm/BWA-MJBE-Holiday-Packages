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
        Schema::create('yachts', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('thumbnail');
            $table->string('name')->unique();
            $table->string('model');
            $table->year('year');
            $table->integer('capacity');
            $table->integer('cabin');
            $table->string('location');
            $table->string('description');
            $table->integer('price');
            $table->boolean('reserved')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('crew')->nullable();
            $table->string('length')->nullable();
            $table->string('superstructure')->nullable();
            $table->string('machinery')->nullable();
            $table->string('builder_&_designer')->nullable();
            $table->string('speed')->nullable();
            $table->string('dive_equipment')->nullable();
            $table->string('tenders')->nullable();
            $table->string('navigation')->nullable();
            $table->string('safety_equipment')->nullable();
            $table->string('water_toys')->nullable();
            $table->string('others')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yachts');
    }
};
