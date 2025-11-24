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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->string('payment_id')->unique(); // ID unik untuk payment
            $table->enum('payment_method', ['cash', 'qris']);
            $table->decimal('amount', 10, 2);
            $table->decimal('paid_amount', 10, 2)->default(0);
            $table->decimal('change_amount', 10, 2)->default(0); // untuk cash payment
            $table->enum('status', ['pending', 'paid', 'failed', 'cancelled'])->default('pending');

            // QRIS Midtrans specific fields
            $table->string('midtrans_transaction_id')->nullable(); // dari Midtrans
            $table->string('midtrans_order_id')->nullable(); // order ID yang dikirim ke Midtrans
            $table->string('snap_token')->nullable(); // untuk frontend payment
            $table->json('midtrans_response')->nullable(); // store response dari Midtrans
            $table->string('qris_string')->nullable(); // QRIS string untuk di-generate QR

            // Additional info
            $table->text('notes')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->timestamp('expired_at')->nullable(); // untuk QRIS timeout
            $table->timestamps();

            // Indexes
            $table->index(['midtrans_transaction_id']);
            $table->index(['status']);
            $table->index(['payment_method']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
