<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerawatanRutin extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'id_peralatan',
        'keterangan',
        'tanggal_pekerjaan',
        'status',
        'id_teknisi',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_teknisi', 'id');
    }

    public function peralatan(){
        return $this->belongsTo(Peralatan::class, 'id_peralatan', 'id');
    }
}
