<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Butai extends Eloquent
{
    protected $connection = 'pgsql';
    protected $table = 'girl';
    protected $primaryKey = 'id';
}
