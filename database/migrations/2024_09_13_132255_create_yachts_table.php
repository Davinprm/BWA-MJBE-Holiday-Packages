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
            $table->string('name')->unique();
            $table->string('thumbnail');
            $table->string('model');
            $table->date('built_date');
            $table->integer('capacity');
            $table->integer('cabins');
            $table->text('location');
            $table->text('description');
            $table->integer('price');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_full_booked')->nullable(); 
            $table->integer('crew')->nullable();
            $table->string('length')->nullable();
            $table->text('boat_builder_and_designer')->nullable();
            $table->text('superstructure')->nullable();
            $table->text('machinery_and_electronics')->nullable();
            $table->string('speed')->nullable();
            $table->text('dive_equipment')->nullable();
            $table->text('tenders')->nullable();
            $table->text('navigation')->nullable();
            $table->text('safety_equipment_and_features')->nullable();
            $table->text('water_toys')->nullable();
            $table->text('others')->nullable();
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
