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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->foreignId('customer_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('kasir_id')->nullable()->constrained('users')->onDelete('set null');
            $table->decimal('subtotal', 10, 2);
            $table->decimal('total_amount', 10, 2);
            $table->enum('status', ['pending', 'confirmed', 'preparing', 'ready', 'completed', 'cancelled'])->default('pending');
            $table->enum('order_type', ['dine_in', 'takeaway', 'online'])->default('online');
            $table->string('customer_name')->nullable(); // untuk walk-in customer
            $table->string('customer_phone')->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('order_date');
            $table->timestamp('estimated_ready_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
