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
            $table->date('birth_date');
            $table->string('breed');
            $table->string('gender');
            $table->string('color');
            $table->double('weight');
            $table->double('size');
            $table->boolean('vaccination_status');
            $table->string('description');
            $table->date('rescued_date');
            $table->boolean('adoption_status');
            $table->date('publish_date');
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
