<?php

use App\Models\Schedule;
use App\Models\Team;
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
        Schema::create('football_matches', function (Blueprint $table) {
            $table->id();
            $table->uuid('match_uuid')->unique();
            $table->foreignIdFor(Schedule::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Team::class, 'winner_team_id')->nullable()->constrained()->onDelete('set null');
            $table->integer('team_1_score')->default(0);
            $table->integer('team_2_score')->default(0);
            $table->integer('team_1_possession')->default(0);
            $table->integer('team_2_possession')->default(0);
            $table->integer('team_1_shots_on_target')->default(0);
            $table->integer('team_2_shots_on_target')->default(0);
            $table->integer('team_1_fouls')->default(0);
            $table->integer('team_2_fouls')->default(0);
            $table->integer('team_1_corners')->default(0);
            $table->integer('team_2_corners')->default(0);
            $table->integer('team_1_yellow_cards')->default(0);
            $table->integer('team_2_yellow_cards')->default(0);
            $table->integer('team_1_red_cards')->default(0);
            $table->integer('team_2_red_cards')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('football_matches');
    }
};
