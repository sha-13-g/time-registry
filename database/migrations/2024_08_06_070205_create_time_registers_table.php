<?php

use App\Models\Agent;
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
        Schema::create('time_registers', function (Blueprint $table) {
            $table->id();
            $table->date('comming_time');
            $table->date('leaving_time')->nullable();
            $table->foreignIdFor(Agent::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('time_registers');
        Schema::table('timer_register', function (Blueprint $table) {
            $table->dropForeignIdFor(Agent::class);
        });
    }
};
