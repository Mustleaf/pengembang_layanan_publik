<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikatelmulti extends Model
{
    use HasFactory;
    protected $guarded = ['id_sertif_elektronik_multi'];
    public function prosesform(): HasMany
    {
        return $this->hasMany(Prosesform::class);
    }
}
