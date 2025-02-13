<?php

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
        Schema::create('leagues', function (Blueprint $table) {
            $table->id();
            $table->uuid('league_uuid');
            $table->string('slug');
            $table->string('title')->unique();
            $table->string('semester_season');
            $table->integer('teams')->default(2);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('status')->default('Scheduled');
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leagues');
    }
};
