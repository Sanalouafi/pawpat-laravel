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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('breed');
            $table->string('gender');
            $table->string('color');
            $table->integer('weight');
            $table->integer('size');
            $table->boolean('vaccination_status');
            $table->string('description');
            $table->date('date_rescued');
            $table->date('date_birth');
            $table->boolean('adoption_status');
            $table->foreignId('type_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
