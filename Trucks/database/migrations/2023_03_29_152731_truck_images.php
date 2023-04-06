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
        Schema::create('truck_images', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('truck_id');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['name','truck_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truck_images');
    }
};
