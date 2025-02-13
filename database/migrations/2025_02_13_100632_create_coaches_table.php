<?php

use App\Models\Coach;
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
        Schema::create('coaches', function (Blueprint $table) {
            $table->id();
            $table->uuid('coach_uuid');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('description');
            $table->integer('success_rate')->default(0);
            $table->foreignIdFor(Team::class);
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coaches');
    }
};
