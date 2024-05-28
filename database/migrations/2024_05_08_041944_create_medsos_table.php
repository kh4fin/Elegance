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
        Schema::create('medsos', function (Blueprint $table) {
            $table->id();
            $table->string('location')->nullable()->comment('Alamat fisik lokasi');
            $table->string('location_maps')->nullable()->comment('Tautan Google Maps lokasi');
            $table->string('phone_number')->nullable()->comment('Nomor telepon');
            $table->string('email')->nullable()->comment('Alamat email');
            $table->string('instagram')->nullable()->comment('Tautan profil Instagram');
            $table->string('facebook')->nullable()->comment('Tautan profil Facebook');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medsos');
    }
};
