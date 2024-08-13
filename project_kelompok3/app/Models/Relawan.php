<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relawan extends Model
{
    use HasFactory;
    protected $table = 'tb_relawan';
    protected $guarded = ['id_relawan'];
    protected $primaryKey = 'id_relawan';
    public $timestamps = false;

    public function laporan(){
        return $this->hasMany(Laporan::class, 'id_relawan');
    }
}
