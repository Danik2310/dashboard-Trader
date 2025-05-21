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
    Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->enum('type', ['compra', 'retiro']);
        $table->decimal('amount', 18, 8);
        $table->enum('status', ['pendiente', 'aprobado', 'rechazado'])->default('pendiente');
        $table->foreignId('reviewed_by')->nullable()->constrained('users');
        $table->text('comments')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
