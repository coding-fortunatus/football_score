<?php

use App\Models\FootballMatch;
use App\Models\Player;
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
        Schema::create('goal_scorers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(FootballMatch::class, 'match_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(Player::class)->constrained()->onDelete('cascade');
            $table->integer('minute');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goal_scorers');
    }
};
