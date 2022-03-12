<?php

namespace App\Http\Controllers;

use App\Http\Controllers\dataPeserta;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        $dataPeserta = dataPeserta::all();
        return view('cetak.index', compact('dataPeserta'));
    }
}
