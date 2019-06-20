<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avengers extends Model
{
    protected $connection = 'pgsql';
    protected $table = 'hero';
    protected $keyType = 'string';
}
