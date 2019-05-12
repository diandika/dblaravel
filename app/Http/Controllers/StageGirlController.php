<?php

namespace App\Http\Controllers;

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
        $butai = User::all();
        Log::info($butai);
        $stagegirls = $seisho->merge($butai);
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
}
