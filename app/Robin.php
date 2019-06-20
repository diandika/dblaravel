<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Robin extends Model
{
    protected $connection = 'mongodb2';
    protected $collection = 'hero';
}
