<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C_magang extends Model
{
    use HasFactory;
    protected $table = 'c_magang';
    protected $primaryKey = 'id_cmagang';
    protected $fillable = ['email', 'nama_lengkap', 'tempat_lahir','tgl_lahir', 'asal_instansi', 'minat', 'skill','cv'];

}
