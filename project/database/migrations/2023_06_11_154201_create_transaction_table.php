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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('barbershop_id');
            $table->unsignedBigInteger('barber_id');
            $table->string('service');
            $table->bigInteger('price');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('barbershop_id')->references('id')->on('barbershops');
            $table->foreign('barber_id')->references('id')->on('barbers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
