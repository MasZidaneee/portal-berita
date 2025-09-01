<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Berita; // Import model Berita Anda
use Illuminate\Support\Str; // Diperlukan jika Anda ingin membuat slug otomatis

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Berita::truncate();

        Berita::create([
            'judul' => 'Dampak Urbanisasi Terhadap Lingkungan',
            'isi' => 'Urbanisasi yang pesat menyebabkan polusi, deforestasi, dan peningkatan suhu kota. Artikel ini membahas bagaimana urbanisasi berdampak terhadap lingkungan dan solusi keberlanjutan.',
            'gambar' => 'berita4.jpg',
            'author' => 'Ir. Dini Kota',
            'read_time' => 4,
            'kategori' => 'Worlds',
            'created_at' => now()->subDays(3),
            'updated_at' => now()->subDays(3),
        ]);

        Berita::create([
            'judul' => 'Pentingnya Edukasi Digital di Sekolah',
            'isi' => 'Literasi digital menjadi sangat penting di era modern. Artikel ini membahas bagaimana kurikulum harus beradaptasi untuk mempersiapkan siswa menghadapi dunia digital dan teknologi masa depan.',
            'gambar' => 'berita5.jpg',
            'author' => 'Dr. Nurul EdTech',
            'read_time' => 3,
            'kategori' => 'Education',
            'created_at' => now()->subDays(1),
            'updated_at' => now()->subDays(1),
        ]);

        Berita::create([
            'judul' => 'Perubahan Iklim dan Dampaknya di Asia Tenggara',
            'isi' => 'Artikel ini membahas secara mendalam tentang dampak perubahan iklim yang semakin nyata di wilayah Asia Tenggara, mulai dari kenaikan permukaan air laut, perubahan pola cuaca ekstrem, hingga ancaman terhadap ketahanan pangan. Dibahas juga upaya-upaya adaptasi dan mitigasi yang bisa dilakukan oleh pemerintah dan masyarakat.',
            'gambar' => 'berita-gambar-1.jpg', // Nama file gambar di public/images/
            'author' => 'Dr. Lestari Lingkungan',
            'read_time' => 5,
            'kategori' => 'Worlds',
            // 'slug' => Str::slug('Perubahan Iklim dan Dampaknya di Asia Tenggara'), // Aktifkan jika Anda menambahkan kolom slug
            'created_at' => now()->subDays(21), // 3 minggu lalu
            'updated_at' => now()->subDays(21),
        ]);

        Berita::create([
            'judul' => 'Inovasi Teknologi AI dalam Pendidikan Modern',
            'isi' => 'Kecerdasan Buatan (AI) telah merevolusi banyak sektor, termasuk pendidikan. Artikel ini mengeksplorasi bagaimana AI digunakan untuk personalisasi pembelajaran, otomatisasi tugas administrasi, dan pengembangan alat bantu pengajaran yang inovatif. Tantangan dan etika penggunaan AI dalam ruang kelas juga dibahas.',
            'gambar' => 'berita-gambar-2.jpg', // Nama file gambar di public/images/
            'author' => 'Prof. Budi Tekno',
            'read_time' => 4,
            'kategori' => 'Education',
            // 'slug' => Str::slug('Inovasi Teknologi AI dalam Pendidikan Modern'),
            'created_at' => now()->subDays(14), // 2 minggu lalu
            'updated_at' => now()->subDays(14),
        ]);

        Berita::create([
            'judul' => 'Pentingnya Kesehatan Mental di Era Digital',
            'isi' => 'Tekanan hidup di era digital, dengan paparan informasi yang tak henti dan ekspektasi sosial yang tinggi, membawa tantangan baru bagi kesehatan mental. Artikel ini menyoroti pentingnya menjaga keseimbangan mental, tanda-tanda gangguan mental yang umum, serta strategi praktis untuk mengelola stres dan kecemasan.',
            'gambar' => 'berita-gambar-4.jpg', // Nama file gambar di public/images/
            'author' => 'Psikolog Nia',
            'read_time' => 3,
            'kategori' => 'Healths',
            // 'slug' => Str::slug('Pentingnya Kesehatan Mental di Era Digital'),
            'created_at' => now()->subDays(7), // 1 minggu lalu
            'updated_at' => now()->subDays(7),
        ]);

        Berita::create([
            'judul' => 'Tren Baru dalam Olahraga Ekstrem: Panjat Tebing Urban',
            'isi' => 'Olahraga ekstrem terus berkembang dengan munculnya tren-tren baru yang menantang. Panjat tebing urban, atau "buildering", menjadi fenomena menarik di kalangan pencari adrenalin. Artikel ini membahas tentang risiko, persiapan, dan etika yang terlibat dalam aktivitas ini, serta destinasi populer di seluruh dunia.',
            'gambar' => 'berita-gambar-3.jpg', // Nama file gambar di public/images/
            'author' => 'Jurnalis Petualang',
            'read_time' => 6,
            'kategori' => 'Sports',
            // 'slug' => Str::slug('Tren Baru dalam Olahraga Ekstrem: Panjat Tebing Urban'),
            'created_at' => now()->subDays(2), // 2 hari lalu
            'updated_at' => now()->subDays(2),
        ]);

        // Anda bisa menambahkan lebih banyak data berita di sini
    }
}