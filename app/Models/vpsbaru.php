<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vpsbaru extends Model
{
    use HasFactory;
    protected $fillable = ['id_vps_baru', 'id_layanan', 'nama_pemohon','instansi','nip',
                           'tujuan_pembuatan_vps','prosesor','sistem_operasi','hard_disk','ram','ip_address','ssh','remote_desktop'];
    protected $table = 'vps_baru';
}
