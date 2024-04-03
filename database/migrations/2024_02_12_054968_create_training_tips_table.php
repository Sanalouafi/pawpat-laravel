<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('training_tips', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->unsignedInteger('difficulty_level_id');
            $table->foreign('difficulty_level_id')->references('id')->on('difficulty_levels')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_tips');
    }
};
