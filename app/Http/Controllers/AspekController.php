<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AspekController extends Controller
{
    public function index()
    {   
        $playlist = DB::connection('odbc')
                    ->table('Mat_Ref_Aspek')
                    ->select('*')
                    ->get();

        return view('aspek', [
            'playlist' => $playlist,
        ]);
    }
}
