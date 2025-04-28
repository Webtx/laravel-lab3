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
        Schema::create('authors', function (Blueprint $table) {
            $table->id();

            //fields 
            $table->String('name');
            $table->String('email')->unique;
            $table->timestamps();
        });
    }

    /**
     * reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
