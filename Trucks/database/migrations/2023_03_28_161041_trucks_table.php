<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->id();
            $table->string('image', 5000);
            $table->string('make', 100);
            $table->string('model', 100);
            $table->date('years');
            $table->string('fuel', 50);
            $table->integer('run');
            $table->string('countries', 5000);
            $table->string('type', 50);
            $table->string('standart', 100); 
            $table->integer('price');
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trucks');
    }
};
