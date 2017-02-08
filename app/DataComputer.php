<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataComputer extends Model
{
    protected $fillable = [
        'ip_address',
        'host_name',
        'mac_address',
        'operating_system',
        'user_agent',
        'lokasi',
        'bidang',
        'seksi',
        'tugas_pengguna',
    ];

    public function datasoftwear()
    {
        return $this->hasMany('App\DataSoftwear');
    }
}
