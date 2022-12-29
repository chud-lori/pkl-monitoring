<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pembimbing extends Authenticatable
{
    use HasFactory;
    protected $guard = 'pembimbing';

    protected $fillable = ['nama', 'email', 'password', 'nip'];

    public function siswas()
    {
        return $this->hasMany(Siswa::class);
    }
}
