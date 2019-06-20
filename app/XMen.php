<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class XMen extends Model
{
    protected $connection = 'pgsql2';
    protected $table = 'hero';
    protected $primaryKey = '_id';
}
