<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'society',
        'departure_station',
        'arrival_station',
        'departure_time',
        'arrival_time',
        'departure_date',
        'arrival_date',
        'train_id',
        'wagons',
        'on_time',
        'canceled',
    ];
}
