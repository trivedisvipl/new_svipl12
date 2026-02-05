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
        Schema::create('portfolio_image', function (Blueprint $table) {
            $table->id();
            $table->foreignId('portfolio_id')->constrained('portfolio')->onDelete('CASCADE');
            $table->string('image')->nullable();
            $table->string('sess_id')->nullable();
            $table->integer('disp_order')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio_image');
    }
};
