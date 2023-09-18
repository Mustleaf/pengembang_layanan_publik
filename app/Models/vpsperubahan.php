<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vpsperubahan extends Model
{
    use HasFactory;
    protected $guarded = ['id_vps_perubahan'];
    public function prosesform(): HasMany
    {
        return $this->hasMany(Prosesform::class);
    }
}
