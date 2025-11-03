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
        Schema::create('webdev_heroes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('cta1')->nullable();
            $table->string('cta2')->nullable();
            $table->timestamps();
        });

        Schema::create('webdev_portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('category')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webdev_heroes');
        Schema::dropIfExists('webdev_portfolios');

    }
};
