<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas'; // pastikan sesuai dengan nama tabel

    protected $fillable = [
        'judul',
        'isi',
        'gambar',
        'kategori',
        'user_id', // kolom untuk relasi ke user
    ];

    // Relasi ke User (yang menulis berita)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}