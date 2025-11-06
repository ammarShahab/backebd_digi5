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
        Schema::create('domain_host_packages', function (Blueprint $table) {
            $table->id();
             $table->string('name')->nullable();           // "প্রিমিয়াম"
            $table->string('price', 12)->nullable();  // numeric price, e.g. 20000.00
            $table->string('duration')->nullable();       // "মাস" / "বছর" / "একবার"
            $table->boolean('popular')->default(false);   // true/false
            $table->json('features')->nullable();         // JSON array of features
            $table->integer('span')->nullable();      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domain_host_packages');
    }
};
