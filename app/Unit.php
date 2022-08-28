<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //

    protected $fillable = [
        "email" ,
        "phone" ,
        "name",
        "unit_type" ,
        "location",
        "compound",
        "compound_name",
        "area",
        "room",
        "bathroom",
        "nots" ,
        'economical',
        'average',
        'vip',
        'ultra_vip',
        'super_ultra_vip',
        'red_bricks',
        'semi_finished',
        'Semi_finished_alumetal',
        'Personal',
        'rent',
        'Sale',
        'amount'
       ];
}
