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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->unique();
            $table->string('nombre');
            $table->string('descripcion_corta');
            $table->text('descripcion_larga');
            $table->string('imagen');
            $table->integer('precio_neto');
            $table->integer('precio_venta');
            $table->integer('stock_actual');
            $table->integer('stock_minimo');
            $table->integer('stock_bajo');
            $table->integer('stock_alto');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
