<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataMapping extends Model
{
    protected $connection = 'datamapping';
    protected $table = 'columnmapping';
}
