<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\berkasPeserta;

class berkasPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berkasPeserta = BerkasPeserta::all();
        return response()->json([
            'success' => true,
            'message' => 'data peserta',
            'data' => $berkasPeserta,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'id_peserta' => 'required',
            'ftcpy_ijazah' => 'required',
            'ftcpy_akte' => 'required',
            'ftcpy_kk' => 'required',
            'ftcpy_skhun' => 'required',
            'ftcpy_nilai_raport' => 'required',
        ]);

        $berkasPeserta = new berkasPeserta;
        $berkasPeserta->id_peserta = $request->id_peserta;
        $berkasPeserta->ftcpy_ijazah = $request->ftcpy_ijazah;
        if ($request->hasFile('ftcpy_ijazah')) {
            $image = $request->file('ftcpy_ijazah');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/berkasPeserta/', $name);
            $berkasPeserta->ftcpy_ijazah = $name;
        }
        $berkasPeserta->ftcpy_akte = $request->ftcpy_akte;
        if ($request->hasFile('ftcpy_akte')) {
            $image = $request->file('ftcpy_akte');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/berkasPeserta/', $name);
            $berkasPeserta->ftcpy_akte = $name;
        }
        $berkasPeserta->ftcpy_kk = $request->ftcpy_kk;
        if ($request->hasFile('ftcpy_kk')) {
            $image = $request->file('ftcpy_kk');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/berkasPeserta/', $name);
            $berkasPeserta->ftcpy_kk = $name;
        }
        $berkasPeserta->ftcpy_skhun = $request->ftcpy_skhun;
        if ($request->hasFile('ftcpy_skhun')) {
            $image = $request->file('ftcpy_skhun');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/berkasPeserta/', $name);
            $berkasPeserta->ftcpy_skhun = $name;
        }
        $berkasPeserta->ftcpy_nilai_raport = $request->ftcpy_nilai_raport;
        if ($request->hasFile('ftcpy_nilai_raport')) {
            $image = $request->file('ftcpy_nilai_raport');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/berkasPeserta/', $name);
            $berkasPeserta->ftcpy_nilai_raport = $name;
        }
        return response()->json([
            'success' => true,
            'message' => 'Data Peserta Berhasil Dibuat',
            'data' => $berkasPeserta,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berkasPeserta = berkasPeserta::findOrfail($id);
        return response()->json([
            'success' => true,
            'message' => 'menampilkan data peserta',
            'data' => $berkasPeserta,
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $validated = $request->validate([
            'id_peserta' => 'required',
            'ftcpy_ijazah' => 'required',
            'ftcpy_akte' => 'required',
            'ftcpy_kk' => 'required',
            'ftcpy_skhun' => 'required',
            'ftcpy_nilai_raport' => 'required',
        ]);

        $berkasPeserta = new berkasPeserta;
        $berkasPeserta->id_peserta = $request->id_peserta;
        $berkasPeserta->ftcpy_ijazah = $request->ftcpy_ijazah;
        if ($request->hasFile('ftcpy_ijazah')) {
            $image = $request->file('ftcpy_ijazah');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/berkasPeserta/', $name);
            $berkasPeserta->ftcpy_ijazah = $name;
        }
        $berkasPeserta->ftcpy_akte = $request->ftcpy_akte;
        if ($request->hasFile('ftcpy_akte')) {
            $image = $request->file('ftcpy_akte');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/berkasPeserta/', $name);
            $berkasPeserta->ftcpy_akte = $name;
        }
        $berkasPeserta->ftcpy_kk = $request->ftcpy_kk;
        if ($request->hasFile('ftcpy_kk')) {
            $image = $request->file('ftcpy_kk');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/berkasPeserta/', $name);
            $berkasPeserta->ftcpy_kk = $name;
        }
        $berkasPeserta->ftcpy_skhun = $request->ftcpy_skhun;
        if ($request->hasFile('ftcpy_skhun')) {
            $image = $request->file('ftcpy_skhun');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/berkasPeserta/', $name);
            $berkasPeserta->ftcpy_skhun = $name;
        }
        $berkasPeserta->ftcpy_nilai_raport = $request->ftcpy_nilai_raport;
        if ($request->hasFile('ftcpy_nilai_raport')) {
            $image = $request->file('ftcpy_nilai_raport');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/berkasPeserta/', $name);
            $berkasPeserta->ftcpy_nilai_raport = $name;
        }
        return response()->json([
            'success' => true,
            'message' => 'Data Peserta Berhasil Dibuat',
            'data' => $berkasPeserta,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berkasPeserta = berkasPeserta::findOrFail($id);
        $dataPeserta->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Peserta Berhasil Dibuat',
            'data' => $berkasPeserta,
        ], 200);
    }
}
