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
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->string('companny_name')->comment('Nama Perusahaan');
            $table->string('title')->nullable()->comment('Judul header');
            $table->text('description')->nullable()->comment('Deskripsi header');
            $table->string('image')->nullable()->comment('Nama berkas gambar header');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headers');
    }
};
