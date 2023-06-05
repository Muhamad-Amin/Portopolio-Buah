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
            $table->id();
            $table->string('Name', 150)->required();
            $table->text('Keterangan')->required();
            $table->string('Gambar')->required();
            $table->string('Harga')->required();
            $table->unsignedBigInteger('categary_id')->required();
            $table->foreign('categary_id')->references('id')->on('categorys')->required();
            $table->timestamps();
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
