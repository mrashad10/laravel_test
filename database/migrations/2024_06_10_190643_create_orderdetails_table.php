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
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->integer('orderNumber');
            $table->string('productCode', 15)->index('productcode');
            $table->integer('quantityOrdered');
            $table->decimal('priceEach', 10);
            $table->smallInteger('orderLineNumber');

            $table->primary(['orderNumber', 'productCode']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderdetails');
    }
};
