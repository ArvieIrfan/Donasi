<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiBencana extends Model
{
    use HasFactory;

    protected $table = 'tb_informasibencana';
    protected $primaryKey = 'id_bencana';
    protected $fillable = [
        'tgl_bencana',
        'tingkat_keparahan',
        'keterangan',
        'judul',
        'target_donasi',
        'id_laporan',
    ];

    public function laporan(){
        return $this->belongsTo(Laporan::class, 'id_laporan', 'id_laporan');
    }
    public function donasi(){
        return $this->hasMany(Donasi::class, 'id_informasi_bencana');
    }
}
