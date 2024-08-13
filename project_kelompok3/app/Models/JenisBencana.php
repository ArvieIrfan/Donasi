<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBencana extends Model
{
    use HasFactory;
    protected $table = 'tb_jenisbencana';
    protected $primaryKey = 'id_jenis_bencana';
    protected $fillable = ['nama_bencana'];
    public $timestamps = false;

    public function laporan(){
        return $this->hasMany(Laporan::class, 'id_jenis_bencana');
    }
}
