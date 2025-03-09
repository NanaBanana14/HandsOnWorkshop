<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
    use HasFactory;

    // Menentukan nama tabel dalam database
    protected $table = 'skripsis';

    // Primary key dari tabel
    protected $primaryKey = 'id';

    // Menentukan field yang bisa diisi secara massal
    protected $fillable = [
        'nama_mahasiswa',
        'nim',
        'judul',
        'metode',
        'dosen_pembimbing'
    ];

    // Jika primary key bukan auto-increment (tapi di sini auto-increment, jadi false tidak diperlukan)
    public $incrementing = true;

    // Menentukan apakah timestamps (created_at & updated_at) digunakan
    public $timestamps = false;
}
