<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('slug')->unique();
            $table->text('description_courte');
            $table->longText('description_complete')->nullable();
            $table->string('categorie');
            $table->string('image')->nullable();
            $table->string('image_secondaire')->nullable();
            $table->string('lien_demo')->nullable();
            $table->string('lien_code')->nullable();
            $table->boolean('est_en_avant')->default(false);
            $table->integer('ordre')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};