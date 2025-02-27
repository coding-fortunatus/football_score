<?php

use App\Models\Field;
use App\Models\League;
use App\Models\Official;
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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->uuid('schedule_uuid')->unique();
            $table->foreignIdFor(Team::class, 'team_1_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(Team::class, 'team_2_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(Field::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Official::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(League::class)->constrained()->onDelete('cascade');
            $table->dateTime('match_time');
            $table->enum('status', ['Scheduled', 'Completed', 'Cancelled'])->default('Scheduled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
