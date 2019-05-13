<?php

namespace App\Http\Controllers;

use App\Butai;
use App\User;
use Illuminate\Http\Request;
use App\StageGirl;
use App\SeishoGirl;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class StageGirlController extends Controller
{
    public function create(){
        return view('stagegirlcreate');
    }

    public function store(Request $request){
        $stagegirl = new StageGirl();
        $stagegirl->name = $request->get('stagegirlname');
        $stagegirl->class = $request->get('class_num');
        $stagegirl->weapon = $request->get('weapon');
        $stagegirl->save();
        return redirect('stagegirl')->with('success', 'Stage Girl Registered');
    }

    public function index()
    {
        $seisho=SeishoGirl::all();
        $stage=StageGirl::all();
        //$butai = DB::table('girl')->get();
        $butai = Butai::all();
        $stagegirls = $seisho->merge($butai)->merge($stage);
        Log::info($stagegirls);
        return view('stagegirlindex',compact('stagegirls'));
    }

    public function edit($id)
    {
        $stagegirl = StageGirl::find($id);
        return view('stagegirledit',compact('stagegirl','id'));
    }

    public function update(Request $request, $id)
    {
        $stagegirl= StageGirl::find($id);
        $stagegirl->name = $request->get('name');
        $stagegirl->class = $request->get('class_num');
        $stagegirl->weapon = $request->get('weapon');
        $stagegirl->save();
        return redirect('stagegirl')->with('success', 'Stage girl update');
    }

    public function destroy($id){
        $stagegirl = StageGirl::find($id);
        $stagegirl->delete();
        return redirect('stagegirl')->with('success', 'Stage girl deleted');
    }

    public function select(Request $request){
        $seisho=DB::connection('mongodb2')
            ->collection('table1')
            ->where('name', $request->get('stagegirlname'))
            ->get();
        /*$stage=DB::connection('mongodb')
            ->collection('stage_girl')
            ->where('name', $request->get('stagegirlname'))
            ->get();
        */
        $stage = StageGirl::all()->where('name', '=', $request->get('stagegirlname'));
        //$butai = DB::table('girl')->get();
        $butai = DB::connection('pgsql')
            ->table('girl')
            ->select(DB::raw('*'))
            ->where('nama', 'LIKE', '%'.$request->get('stagegirlname').'%')
            ->get();
        Log::info($butai);
        Log::info($seisho);
        Log::info(gettype($stage));
        Log::info($request);
        $stagegirls = $seisho->merge($butai)->merge($stage);
        return view('stagegirlindex',compact('stagegirls'));
    }
}
