<?php

namespace App\Http\Controllers;

use App\Models\berkasPeserta;
use App\Models\dataPeserta;
use Illuminate\Http\Request;

class BerkasPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berkasPeserta = berkasPeserta::all();
        return view('berkasPeserta.index', compact('berkasPeserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $berkasPeserta = berkasPeserta::all();
        $dataPeserta = dataPeserta::all();
        return view('berkasPeserta.create', compact('berkasPeserta','dataPeserta'));
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
        $berkasPeserta->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan"
        ]);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\berkasPeserta  $berkasPeserta
     * @return \Illuminate\Http\Response
     */
    public function show(berkasPeserta $berkasPeserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\berkasPeserta  $berkasPeserta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berkasPeserta = berkasPeserta::findOrFail($id);
        $dataPeserta = dataPeserta::all();
        return view('berkasPeserta.edit', compact('berkasPeserta','dataPeserta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\berkasPeserta  $berkasPeserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $berkasPeserta = berkasPeserta::findOrFail($id);
        $berkasPeserta->id_peserta = $request->id_peserta;
        if ($request->hasFile('ftcpy_ijazah')) {
            $berkasPeserta->deleteImage();
            $image = $request->file('ftcpy_ijazah');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/berkasPeserta/', $name);
            $berkasPeserta->ftcpy_ijazah = $name;
        }
        if ($request->hasFile('ftcpy_akte')) {
            $berkasPeserta->deleteImage();
            $image = $request->file('ftcpy_akte');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/berkasPeserta/', $name);
            $berkasPeserta->ftcpy_akte = $name;
        }
        if ($request->hasFile('ftcpy_kk')) {
            $berkasPeserta->deleteImage();
            $image = $request->file('ftcpy_kk');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/berkasPeserta/', $name);
            $berkasPeserta->ftcpy_kk = $name;
        }
        if ($request->hasFile('ftcpy_skhun')) {
            $berkasPeserta->deleteImage();
            $image = $request->file('ftcpy_skhun');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/berkasPeserta/', $name);
            $berkasPeserta->ftcpy_skhun = $name;
        }
        if ($request->hasFile('ftcpy_nilai_raport')) {
            $berkasPeserta->deleteImage();
            $image = $request->file('ftcpy_nilai_raport');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/berkasPeserta/', $name);
            $berkasPeserta->ftcpy_nilai_raport = $name;
        }
        $berkasPeserta->save();
        return redirect()->route('berkasPeserta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\berkasPeserta  $berkasPeserta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berkasPeserta = berkasPeserta::findOrFail($id);
        $berkasPeserta->deleteImage();
        $berkasPeserta->delete();
        return redirect()->route('berkasPeserta.index');
    }
}
