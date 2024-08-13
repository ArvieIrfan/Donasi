<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    use HasFactory;
    protected $table = 'tb_donatur';

    protected $primaryKey = 'id_donatur';

    protected $fillable = [
        'id_donatur',
        'nama',
        'no_telepon',
        'email',
    ];
}
