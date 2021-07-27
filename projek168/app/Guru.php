<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = ['nama', 'alamat', 'mata_pelajaran', 'no_hp'];
    protected $primaryKey = 'id_guru';
    protected $table = 'guru';
}
