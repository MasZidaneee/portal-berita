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
        Schema::table('beritas', function (Blueprint $table) {
            // Tambahkan kolom 'gambar' setelah 'isi'
            $table->string('gambar')->nullable()->after('isi');
            // Tambahkan kolom 'author' setelah 'gambar'
            $table->string('author')->default('Admin')->after('gambar');
            // Tambahkan kolom 'read_time' setelah 'author' (opsional, tapi berguna untuk tampilan)
            $table->integer('read_time')->nullable()->after('author');
            // Tambahkan kolom 'category' untuk 'Related Topics'
            $table->string('category')->nullable()->after('read_time');
            // (Opsional) Jika Anda ingin slug untuk URL yang lebih bersih, tambahkan ini:
            // $table->string('slug')->unique()->nullable()->after('judul');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('beritas', function (Blueprint $table) {
            // Hapus kolom jika migrasi di-rollback
            $table->dropColumn(['gambar', 'author', 'read_time', 'category']);
            // (Opsional) Jika Anda menambahkan slug:
            // $table->dropColumn('slug');
        });
    }
};