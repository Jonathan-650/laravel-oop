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
        Schema::create('animal', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->timestamps();
            $table->uuid('habitat_id');
            $table->string('name', 255);
            $table->enum('gender', ['male', 'female']);
            $table->date('birth_date');
            $table->date('arrival_date');
            $table->decimal('weight', 6, 2);
            $table->enum('status', ['active, inactive, deceased']);
            $table->string('note', 255);

            $table->foreign('habitat_id')->references('id')->on('habitat')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal');
    }
};
