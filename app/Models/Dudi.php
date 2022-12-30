<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Dudi extends Authenticatable
{
    use HasFactory;

    protected $guard = 'dudi';

    protected $fillable = ['nama', 'email', 'password', 'perusahaan_id'];

    public function siswas()
    {
        return $this->hasMany(Siswa::class);
    }
}
