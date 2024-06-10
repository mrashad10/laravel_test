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
        Schema::table('orderdetails', function (Blueprint $table) {
            $table->foreign(['orderNumber'], 'orderdetails_ibfk_1')->references(['orderNumber'])->on('orders')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['productCode'], 'orderdetails_ibfk_2')->references(['productCode'])->on('products')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orderdetails', function (Blueprint $table) {
            $table->dropForeign('orderdetails_ibfk_1');
            $table->dropForeign('orderdetails_ibfk_2');
        });
    }
};
