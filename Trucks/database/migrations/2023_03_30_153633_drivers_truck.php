<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('driver_truck', function (Blueprint $table) {
            $table->foreignId('driver_id')->constrained();
            $table->foreignId('truck_id')->constrained();
            $table->unique('driver_id');
            $table->unique('truck_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('driver_truck');
    }
};
