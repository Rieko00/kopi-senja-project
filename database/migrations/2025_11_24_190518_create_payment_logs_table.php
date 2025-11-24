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
        Schema::create('payment_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_id')->constrained('payments')->onDelete('cascade');
            $table->string('event_type'); // webhook, manual_update, cash_payment
            $table->string('transaction_status')->nullable();
            $table->json('raw_data')->nullable(); // data dari Midtrans atau manual input
            $table->boolean('is_processed')->default(false);
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index(['payment_id']);
            $table->index(['event_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_logs');
    }
};
