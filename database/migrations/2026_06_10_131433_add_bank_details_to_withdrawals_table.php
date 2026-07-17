<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('withdrawals', function (Blueprint $table) {

            $table->string('account_name')->nullable()->after('amount');

            $table->string('account_number')->nullable()->after('account_name');

            $table->string('bank_name')->nullable()->after('account_number');

            $table->timestamp('approved_at')->nullable()->after('status');

            $table->timestamp('paid_at')->nullable()->after('approved_at');

            $table->foreignId('approved_by')
                ->nullable()
                ->after('paid_at')
                ->constrained('users')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('withdrawals', function (Blueprint $table) {

            $table->dropForeign(['approved_by']);

            $table->dropColumn([
                'account_name',
                'account_number',
                'bank_name',
                'approved_at',
                'paid_at',
                'approved_by',
            ]);
        });
    }
};