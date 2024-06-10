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
        Schema::create('employees', function (Blueprint $table) {
            $table->integer('employeeNumber')->primary();
            $table->string('lastName', 50);
            $table->string('firstName', 50);
            $table->string('extension', 10);
            $table->string('email', 100);
            $table->string('officeCode', 10)->index('officecode');
            $table->integer('reportsTo')->nullable()->index('reportsto');
            $table->string('jobTitle', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
