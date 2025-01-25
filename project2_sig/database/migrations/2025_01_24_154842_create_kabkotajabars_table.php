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
        Schema::create('kabkotajabars', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique()->nullable(false);
            $table->string('alt_name', 50);
            $table->double('latitude');
            $table->double('longitude');
            $table->double('luas_wilayah')->nullable(true);
            $table->integer('jumlah_penduduk')->nullable(true);
            $table->integer('jumlah_kepala_keluarga')->nullable(true);
            $table->integer('jumlah_pendidikan_s1')->nullable(true);
            $table->integer('jumlah_guru')->nullable(true);
            $table->foreignId('provinsi_id')->constrained('provjabars');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kabkotajabars');
    }
};
