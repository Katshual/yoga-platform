<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('postures', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->text('description');
        $table->string('discipline'); // Yoga, Tai Chi, Qi Gong
        $table->string('niveau'); // Débutant, Intermédiaire, Avancé
        $table->string('image')->nullable(); // Lien de l'image
        $table->string('animation')->nullable(); // GIF ou Lottie
        $table->string('source_video')->nullable(); // Lien vidéo YouTube
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postures');
    }
};
