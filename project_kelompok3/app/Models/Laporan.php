<?php

namespace App\Models;

use App\Http\Controllers\PoskoController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = 'tb_laporan';
    protected $fillable = [
        'tgl_laporan',
        'isi_laporan',
        'lokasi_kejadian',
        'foto',
        'status',
        'id_relawan',
        'id_jenis_bencana'
    ];
    protected $primaryKey = 'id_laporan';
    public $timestamps = false;

    public function informasiBencana(){
        return $this->hasOne(InformasiBencana::class, 'id_laporan');
    }
    public function relawan(){
        return $this->belongsTo(Relawan::class,  'id_relawan', 'id_relawan');
    }
    public function jenisBencana(){
        return $this->belongsTo(JenisBencana::class, 'id_jenis_bencana', 'id_jenis_bencana');
    }

}
