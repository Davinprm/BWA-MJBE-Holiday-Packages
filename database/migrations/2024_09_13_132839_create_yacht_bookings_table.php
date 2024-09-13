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
        Schema::create('yacht_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->integer('passenger');
            $table->integer('childern');
            $table->foreignId('yacht_id')->constrained()->cascadeOnDelete();
            $table->date('date');
            $table->string('trip_length');
            $table->foreignId('destination_id')->constrained()->cascadeOnDelete();
            $table->foreignId('experiences_id')->constrained()->cascadeOnDelete();
            $table->string('price');
            $table->string('preferences');
            $table->string('id_card');
            $table->boolean('paid')->default(false);
            $table->boolean('booking_trx_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yacht_bookings');
    }
};
