<?php

namespace App\Http\Controllers;

use App\Models\dataPeserta;
use Session;
use Illuminate\Http\Request;

class DataPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPeserta = dataPeserta::all();
        return view('dataPeserta.index', compact('dataPeserta'));
    }

    public function cetakDataPeserta()
    {
        $dataPeserta = dataPeserta::all();
        $pdf   = \PDF::loadview('cetak.cetak-datapeserta', compact('dataPeserta'));
        return $pdf->download('data peserta.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataPeserta = dataPeserta::all();
        return view('dataPeserta.create');
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
            'nama' => 'required',
            'no_pendaftaran' => 'required',
            'tgl_daftar' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'asal_provinsi' => 'required',
            'asal_kab_kota' => 'required',
            'asal_desa_kelurahan' => 'required',
            'alamat' => 'required',
            'kode_pos' => 'required',
            'jurusan' => 'required',
            'nama_ortu' => 'required',
            'pekerjaan_ortu' => 'required',
            'no_hp_ortu' => 'required',
            'alamat_ortu' => 'required',
        ]);

        $dataPeserta = new dataPeserta;
        $dataPeserta->nama = $request->nama;
        $dataPeserta->no_pendaftaran = $request->no_pendaftaran;
        $dataPeserta->tgl_daftar = $request->tgl_daftar;
        $dataPeserta->jk = $request->jk;
        $dataPeserta->tempat_lahir = $request->tempat_lahir;
        $dataPeserta->tgl_lahir = $request->tgl_lahir;
        $dataPeserta->agama = $request->agama;
        $dataPeserta->asal_provinsi = $request->asal_provinsi;
        $dataPeserta->asal_kab_kota = $request->asal_kab_kota;
        $dataPeserta->asal_desa_kelurahan = $request->asal_desa_kelurahan;
        $dataPeserta->alamat = $request->alamat;
        $dataPeserta->kode_pos = $request->kode_pos;
        $dataPeserta->jurusan = $request->jurusan;
        $dataPeserta->nama_ortu = $request->nama_ortu;
        $dataPeserta->pekerjaan_ortu = $request->pekerjaan_ortu;
        $dataPeserta->no_hp_ortu = $request->no_hp_ortu;
        $dataPeserta->alamat_ortu = $request->alamat_ortu;
        $dataPeserta->save();
        return redirect()->route('berkasPeserta.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dataPeserta  $dataPeserta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataPeserta = dataPeserta::findOrFail($id);
        return view('dataPeserta.show', compact('dataPeserta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dataPeserta  $dataPeserta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataPeserta = dataPeserta::findOrFail($id);
        return view('dataPeserta.edit', compact('dataPeserta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dataPeserta  $dataPeserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataPeserta = dataPeserta::findOrFail($id);
        $dataPeserta->nama = $request->nama;
        $dataPeserta->no_pendaftaran = $request->no_pendaftaran;
        $dataPeserta->tgl_daftar = $request->tgl_daftar;
        $dataPeserta->jk = $request->jk;
        $dataPeserta->tempat_lahir = $request->tempat_lahir;
        $dataPeserta->tgl_lahir = $request->tgl_lahir;
        $dataPeserta->agama = $request->agama;
        $dataPeserta->asal_provinsi = $request->asal_provinsi;
        $dataPeserta->asal_kab_kota = $request->asal_kab_kota;
        $dataPeserta->asal_desa_kelurahan = $request->asal_desa_kelurahan;
        $dataPeserta->alamat = $request->alamat;
        $dataPeserta->kode_pos = $request->kode_pos;
        $dataPeserta->jurusan = $request->jurusan;
        $dataPeserta->nama_ortu = $request->nama_ortu;
        $dataPeserta->pekerjaan_ortu = $request->pekerjaan_ortu;
        $dataPeserta->no_hp_ortu = $request->no_hp_ortu;
        $dataPeserta->alamat_ortu = $request->alamat_ortu;
        $dataPeserta->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan"
        ]);
        return redirect()->route('dataPeserta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dataPeserta  $dataPeserta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataPeserta = dataPeserta::findOrFail($id);
        $dataPeserta->delete();
        return redirect()->route('dataPeserta.index');
    }
}
