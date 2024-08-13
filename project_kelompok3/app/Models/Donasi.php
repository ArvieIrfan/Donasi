<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;
    protected $table = 'tb_donasi';

    protected $primaryKey = 'id_donasi';
    public $incrementing = false; // Pastikan incrementing diatur ke false
    protected $keyType = 'string'; // Pastikan tipe key adalah string

    public $timestamps = false;

    protected $fillable = [
        'id_donasi',
        'id_informasi_bencana',
        'id_donatur',
        'tanggal',
        'jumlah_donasi',
    ];

    public function donatur()
    {
        return $this->belongsTo(Donatur::class, 'id_donatur', 'id_donatur');
    }

    public function informasiBencana()
    {
        return $this->belongsTo(InformasiBencana::class, 'id_informasi_bencana', 'id_bencana');
    }
}
