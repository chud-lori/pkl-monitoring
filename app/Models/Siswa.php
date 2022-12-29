<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    use HasFactory;

    protected $guard = 'siswa';

    protected $fillable = ['nama', 'email', 'password'];

    public function jurnals()
    {
        return $this->hasMany(Jurnal::class);
    }

    public function pembimbing()
    {
        return $this->belongsTo(Pembimbing::class);
    }

    public function dudi()
    {
        return $this->belongsTo(Dudi::class);
    }
}
