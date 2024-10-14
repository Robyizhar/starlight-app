<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Deskripsi :
    // -- Judul: Bandung After Rain
    // -- Penulis: Wulan Nur Amalia
    // -- Tebal: 283 halaman
    // Ukuran: 13x19cm
    // Tahun: 2024
    public function up(): void
    {
        Schema::create('book_catalogs', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->constrained()->onDelete('cascade')->nullable(true);
            $table->string('title')->unique();
            $table->string('writer');
            $table->string('thick');
            $table->string('length');
            $table->string('width');
            $table->string('image');
            $table->date('launch_at');
            $table->longText('glimpse');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_catalogs');
    }
};