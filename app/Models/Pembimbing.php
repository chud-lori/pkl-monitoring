<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembimbing extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'email', 'password', 'nip'];

    public function siswas()
    {
        return $this->hasMany(Siswa::class);
    }
}
