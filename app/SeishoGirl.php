<?php


namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class SeishoGirl extends Eloquent
{
    protected $connection = 'mongodb2';
    protected $collection = 'table1';

    protected $fillable = [
        'name', 'class', 'weapon'
    ];
}