<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduct2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('product2', function (Blueprint $table) {
            $table->id(); // Equivalent to BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->string('name'); // Equivalent to VARCHAR(255)
            $table->decimal('price', 8, 2); // Equivalent to DECIMAL(8, 2)
            $table->text('description')->nullable(); // Equivalent to TEXT NULL
            $table->timestamps(); // Creates both created_at and updated_at columns
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('product2');
    }
}
