<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class BuController extends Controller
{
    public function index()
    {   
        $playlist = DB::connection('odbc')
                    ->table('BU2')
                    ->select('*')
                    ->get();

        return view('bu', [
            'playlist' => $playlist,
        ]);
    }
}
