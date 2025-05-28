<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodi';
<<<<<<< HEAD

    protected $fillable = [
        'nama',
        'singkatan',
        'Kaprodi',
        'Sekretaris',
        'fakultas_id',
    ];

=======
    protected $fillable = ['nama','singkatan','kaprodi','sekretaris','fakultas_id',];
>>>>>>> d82666f67b4528507ba5155beefd213e841c3562
    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }
}
