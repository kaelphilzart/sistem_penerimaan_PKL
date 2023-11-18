<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class A_magang extends Model
{
    use HasFactory;
    protected $table = 'anak';
    protected $primaryKey = 'id_magang';
    protected $fillable = ['email', 'nama_lengkap','asal_instansi', 'minat',];

}
