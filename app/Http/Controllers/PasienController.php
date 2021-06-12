<?php

namespace App\Http\Controllers;

use App\Imports\PasienImport;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PasienController extends Controller
{
    //

    public function index(Request $request){
        $pasien = Pasien::all();
        return view('index0291', [
            'pasien' => $pasien
        ]);
    }

    public function import(Request $request){
        
        Excel::import(new PasienImport, $request->file('import'));

        return redirect()->route('index');

    }
}
