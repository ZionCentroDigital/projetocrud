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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id(); 
            $table->string('nome'); 
            $table->double('preco', 19, 2);
            $table->double('altura', 8, 2); 
            $table->double('largura', 8, 2); 
            $table->double('comprimento', 8, 2); 
            $table->double('peso', 8, 2); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
