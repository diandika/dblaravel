<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class StageGirl extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'stage_girl';

    protected $fillable = [
        'name', 'class', 'weapon'
    ];
}
