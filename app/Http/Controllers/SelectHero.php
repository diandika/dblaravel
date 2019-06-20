<?php

namespace App\Http\Controllers;

use App\Avengers;
use App\JL;
use App\Robin;
use App\XMen;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SelectHero extends Controller
{
    public function all()
    {
        $avengers = Avengers::all();
        $xmen = XMen::all();
        $jl = JL::all();
        $robin = Robin::all();

        Log::info(gettype($avengers));
        Log::info(gettype($xmen));
        Log::info(gettype($jl));
        Log::info(gettype($robin));

        $hero = $jl->concat($robin)->concat($avengers)->concat($xmen);

        Log::info($hero);

        return view('herodatabase')->with('hero', $hero);
    }
}
