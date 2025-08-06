<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('deleted')->default(0);
            $table->timestamps();
        });

        // Varsayılan kategori: Sahiplendirme
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Sahiplendirme',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
