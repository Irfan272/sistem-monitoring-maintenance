<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_divisi',
        'keterangan',
    ];



    public function User(){
        return $this->hasMany(User::class);
    }

    public function peralatan(){
        return $this->hasMany(Peralatan::class);
    }
}
