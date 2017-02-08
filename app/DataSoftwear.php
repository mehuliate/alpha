<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSoftwear extends Model
{
    protected $fillable = [
        'data_computer_id',
        'ip_address',
        'softwear',
    ];

    public function datacomputer()
    {
        return $this->belongTo('App\DataComputer');
    }
}
