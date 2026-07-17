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
        Schema::create('investments', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->foreignId('package_id')->constrained()->cascadeOnDelete();

            $table->decimal('amount',12,2);

            $table->integer('weeks_paid')->default(0);

            $table->integer('total_weeks');

            $table->decimal('total_profit',12,2)->default(0);

            $table->date('next_payout_date');

            $table->boolean('completed')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investments');
    }
};
