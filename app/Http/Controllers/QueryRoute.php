<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueryRoute extends Controller
{
    public function viewSelect(){
        return view('selectquery');
    }

    public function viewUpdate(){
        return view('updatequery');
    }

    public function viewDelete(){
        return view('deletequery');
    }
}
