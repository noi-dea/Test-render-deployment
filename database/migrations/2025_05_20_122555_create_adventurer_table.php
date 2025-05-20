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
        Schema::create('adventurers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('charName');
            // Make migrations for following tables: role, race, rank
            $table->string('portrait');
            $table->string('sprites');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adventurers');
    }
};
