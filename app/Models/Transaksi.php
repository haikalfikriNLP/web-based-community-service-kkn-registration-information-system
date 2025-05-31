<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $guarded = [];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id', 'id');
    }

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'anggota_id', 'id');
    }
}
