<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->nullableMorphs('votable'); // votable_id e votable_type
            $table->enum('type', ['like', 'dislike']);
            $table->timestamps();
            $table->unique(['user_id', 'votable_id', 'votable_type']); // um voto por item
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};
