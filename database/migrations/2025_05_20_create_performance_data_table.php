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
    Schema::create('performance_data', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->date('fecha');
        $table->decimal('capital_total', 18, 8);
        $table->decimal('capital_invertido', 18, 8);
        $table->decimal('porcentaje', 5, 2); // % diario u mensual
        $table->string('data_origen')->nullable(); // por ejemplo: 'MetaTrader'
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performance_data');
    }
};
