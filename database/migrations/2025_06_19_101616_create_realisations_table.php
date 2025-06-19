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
    Schema::create('realisations', function (Blueprint $table) {
        $table->id();
        $table->enum('type', ['video', 'image']);
        $table->string('url')->nullable(); // lien YouTube ou image
        $table->string('title')->nullable();
        $table->text('description')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realisations');
    }
};
