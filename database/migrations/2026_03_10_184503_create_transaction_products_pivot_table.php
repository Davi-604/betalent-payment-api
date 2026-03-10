<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transaction_products_pivot', function (Blueprint $table) {
            $table->id();

            $table->foreignId('transaction_id')->constrained('transactions')->nullOnDelete();
            $table->foreignId('product_id')->constrained('products')->nullOnDelete();
            $table->float('quantity')->default(0);
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transaction_products_pivot');
    }
};
