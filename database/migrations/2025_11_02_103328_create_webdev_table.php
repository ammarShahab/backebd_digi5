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

          Schema::create('webdev_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();           // "প্রিমিয়াম"
            $table->decimal('price', 12, 2)->nullable();  // numeric price, e.g. 20000.00
            $table->string('duration')->nullable();       // "মাস" / "বছর" / "একবার"
            $table->boolean('popular')->default(false);   // true/false
            $table->json('features')->nullable();         // JSON array of features
            $table->integer('span')->nullable();          // optional span (nullable)
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
          Schema::dropIfExists('wevdev_packages');

    }
};
