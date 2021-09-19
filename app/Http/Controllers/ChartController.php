<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ChartController extends Controller
{
    public function index()
    {   
        $playlist = DB::connection('odbc')
                    ->table('Mat_Ref_Aspek')
                    ->select('*')
                    ->get();

        return view('chart', [
            'playlist' => $playlist,
        ]);
    }
}
