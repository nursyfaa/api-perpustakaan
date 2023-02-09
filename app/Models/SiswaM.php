<<<<<<< HEAD
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaM extends Model
{
    use  HasFactory;
    protected $table = 'siswa';
    protected $fillable = [
        'nis', 'namalengkap', 'jk', 'kelas', 'nowa', 'email'
    ];
=======
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

>>>>>>> 3356085 (first commit)
}