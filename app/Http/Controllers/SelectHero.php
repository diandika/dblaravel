<?php

namespace App\Http\Controllers;

use App\Avengers;
use App\XMen;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SelectHero extends Controller
{
    public function all()
    {
        $avengers = Avengers::all();
        $xmen = XMen::all();
        $jl = DB::connection('mongodb')->collection('hero')->get();
        $robin = DB::connection('mongodb2')->collection('hero')->get();

        Log::info($avengers);
        Log::info($xmen);
        Log::info($jl);
        Log::info($robin);

        $hero = $avengers->concat($xmen)->concat($jl)->concat($robin);

        Log::info($hero);

        return view('herodatabase')->with('hero', $hero);
    }
}
