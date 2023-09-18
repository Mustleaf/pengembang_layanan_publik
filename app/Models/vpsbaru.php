<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vpsbaru extends Model
{
    use HasFactory;
    protected $guarded = ['id_vps_baru'];
    protected $fillable = ['nama_pemohon','instansi','nip','tujuan_pembuatan_vps','prosesor','sistem_operasi','ip_address'];
    public function prosesform(): HasMany
    {
        return $this->hasMany(Prosesform::class);
    }
}
