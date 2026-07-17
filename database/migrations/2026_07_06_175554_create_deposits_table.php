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
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->enum('type', [
                'crypto',
                'bank'
            ]);

            $table->decimal('amount', 12, 2);

            $table->string('currency')
                ->default('USD');

            $table->enum('status', [
                'pending',
                'approved',
                'rejected'
            ])->default('pending');

            // Crypto
            $table->string('network')->nullable();
            $table->string('transaction_hash')->nullable();
            $table->string('sender_wallet')->nullable();

            // Bank
            $table->string('bank_name')->nullable();
            $table->string('deposit_reference')->nullable();
            $table->string('proof_of_payment')->nullable();

            // Admin
            $table->foreignId('approved_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamp('approved_at')
                ->nullable();

            $table->text('remarks')
                ->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposits');
    }
};
