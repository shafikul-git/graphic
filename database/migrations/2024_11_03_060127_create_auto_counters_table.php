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
        Schema::create('auto_counters', function (Blueprint $table) {
            $table->id();
            $table->string('counter_key')->unique();
            $table->integer('total_duration')->default(4);
            $table->integer('total_count')->default(50);
            $table->integer('count_start')->default(0);
            $table->string('before')->nullable();
            $table->string('after')->nullable();
            $table->enum('action', ['increment', 'decrement'])->default('increment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auto_counters');
    }
};
