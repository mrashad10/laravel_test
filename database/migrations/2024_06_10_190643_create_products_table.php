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
        Schema::create('products', function (Blueprint $table) {
            $table->string('productCode', 15)->primary();
            $table->string('productName', 70);
            $table->string('productLine', 50)->index('productline');
            $table->string('productScale', 10);
            $table->string('productVendor', 50);
            $table->text('productDescription');
            $table->smallInteger('quantityInStock');
            $table->decimal('buyPrice', 10);
            $table->decimal('MSRP', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
