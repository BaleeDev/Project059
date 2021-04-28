<?php

namespace App\Http\Controllers;

use App\Ujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ujian = Ujian::all();
        return view('Latihan/index', compact('ujian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Latihan/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required',
            'dosen' => 'required',
            'jumlah_soal' => 'required',
            'Keterangan' => 'required'
        ]);
        Ujian::insert([
            'nama_mk' => $request->get('nama_mk'),
            'dosen' => $request->get('dosen'),
            'jumlah_soal' => $request->get('jumlah_soal'),
            'Keterangan' => $request->get('Keterangan')
        ]);
        return redirect('/ujian')->with('status', 'Barang Berhasil DiTambahkan!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function show(Ujian $ujian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function edit(Ujian $ujian)
    {
        return view('Latihan/edit', compact('ujian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ujian $ujian)
    {
        $request->validate([
            'nama_mk' => 'required',
            'dosen' => 'required',
            'jumlah_soal' => 'required',
            'Keterangan' => 'required'
        ]);
        Ujian::where('id', $ujian->id)
            ->update([
                'nama_mk' => $request->nama_mk,
                'dosen' => $request->dosen,
                'jumlah_soal' => $request->jumlah_soal,
                'Keterangan' => $request->Keterangan
            ]);
        return redirect('/ujian')->with('status', 'Data Berhasil DiEdit!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ujian $ujian)
    {
        Ujian::destroy($ujian->id);
        return redirect('/ujian')->with('status', 'Data  Berhasil DiHapus!!!');
    }
}
