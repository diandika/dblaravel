<?php

namespace App\Http\Controllers;

use App\Avengers;
use App\DataMapping;
use App\JL;
use App\Robin;
use App\XMen;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class QueryController extends Controller
{
    public function start(Request $request){
        //Log::info($request['tabel']);

        if ($request['query_type'] == 'select'){
            $columnInfo = DataMapping::where('columnname',$request['tabel'])->get();

            $result = new Collection([]);

            foreach ($columnInfo as $column){
                $tempResult = $result;
                if ($column['relation'] == 'avengers'){
                    $tempResult = $result->concat(Avengers::all($column['dbname']));
                }elseif ($column['relation'] == 'xmen'){
                    $tempResult = $result->concat(XMen::all($column['dbname']));
                }elseif ($column['relation'] == 'justiceLeague'){
                    $tempResult = $result->concat(JL::all($column['dbname']));
                }elseif ($column['relation'] == 'robin'){
                    $tempResult = $result->concat(Robin::all($column['dbname']));
                }
                //Log::info($tempResult);
                $result = $tempResult;
            }

            //Log::info($result);
        }
    }
}
