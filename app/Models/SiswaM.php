<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class SiswaM extends Model
{
    use  HasFactory;
    use SoftDeletes;


    protected $table = 'siswa';
    protected $fillable = [
        'nis', 'namalengkap', 'jk', 'kelas', 'nowa', 'email'
    ];
    protected $hidden = [];

}