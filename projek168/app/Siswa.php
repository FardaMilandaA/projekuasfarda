<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['id_guru', 'nama_siswa', 'no_hp', 'kelas','alamat'];
    protected $primaryKey = 'nis';
    protected $table = 'siswa';
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }
}
