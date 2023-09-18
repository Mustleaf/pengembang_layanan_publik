<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colocationserver extends Model
{
    use HasFactory;
    protected $guarded = ['id_colocation_server'];
    public function prosesform(): HasMany
    {
        return $this->hasMany(Prosesform::class);
    }
}
