<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dataPeserta;

class dataPesertaController extends Controller
{

    public function index()
    {
        $dataPeserta = DataPeserta::all();
        return response()->json([
            'success' => true,
            'message' => 'data peserta',
            'data' => $dataPeserta,
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

    public function store(Request $request)
    {
        $dataPeserta = new dataPeserta();
        $dataPeserta = $request->nama;
        $dataPeserta = $request->no_pendaftaran;
        $dataPeserta = $request->tgl_daftar;
        $dataPeserta = $request->jk;
        $dataPeserta = $request->tempat_lahir;
        $dataPeserta = $request->tgl_lahir;
        $dataPeserta = $request->agama;
        $dataPeserta = $request->asal_provinsi;
        $dataPeserta = $request->asal_kab_kota;
        $dataPeserta = $request->asal_desa_kelurahan;
        $dataPeserta = $request->alamat;
        $dataPeserta = $request->no_pendaftaran;
        $dataPeserta = $request->kode_pos;
        $dataPeserta = $request->jurusan;
        $dataPeserta = $request->nama_ortu;
        $dataPeserta = $request->pekerjaan_ortu;
        $dataPeserta = $request->no_hp_ortu;
        $dataPeserta = $request->alamat_ortu;
        $dataPeserta->save();
        return response()->json([
            'success' => true,
            'message' => 'Data Peserta Berhasil Dibuat',
            'data' => $dataPeserta,
        ], 200);
    }

    public function show($id)
    {
        $dataPeserta = dataPeserta::findOrfail($id);
        return response()->json([
            'success' => true,
            'message' => 'menampilkan data peserta',
            'data' => $dataPeserta,
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

    public function update(Request $request, $id)
    {
        $dataPeserta = dataPeserta::findOrFail();
        $dataPeserta = $request->nama;
        $dataPeserta = $request->no_pendaftaran;
        $dataPeserta = $request->tgl_daftar;
        $dataPeserta = $request->jk;
        $dataPeserta = $request->tempat_lahir;
        $dataPeserta = $request->tgl_lahir;
        $dataPeserta = $request->agama;
        $dataPeserta = $request->asal_provinsi;
        $dataPeserta = $request->asal_kab_kota;
        $dataPeserta = $request->asal_desa_kelurahan;
        $dataPeserta = $request->alamat;
        $dataPeserta = $request->no_pendaftaran;
        $dataPeserta = $request->kode_pos;
        $dataPeserta = $request->jurusan;
        $dataPeserta = $request->nama_ortu;
        $dataPeserta = $request->pekerjaan_ortu;
        $dataPeserta = $request->no_hp_ortu;
        $dataPeserta = $request->alamat_ortu;
        $dataPeserta = $request->no_pendaftaran;
        $dataPeserta->save();
        return response()->json([
            'success' => true,
            'message' => 'Data Peserta Berhasil Dibuat',
            'data' => $dataPeserta,
        ], 200);
    }

    public function destroy($id)
    {
        $dataPeserta = dataPeserta::findOrFail($id);
        $dataPeserta->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Peserta Berhasil Dibuat',
            'data' => $dataPeserta,
        ], 200);
    }
}
