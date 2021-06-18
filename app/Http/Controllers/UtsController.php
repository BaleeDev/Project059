<?php

namespace App\Http\Controllers;

use App\Midsemester;
use Illuminate\Http\Request;

class UtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mid = Midsemester::all();
        return view('/uts/index', compact('mid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uts/add');
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
            'kolom_nim' => 'required',
            'kolom_nama' => 'required',
            'kolom_umur' => 'required',
            'kolom_alamat' => 'required'
        ]);
        Midsemester::insert([
            'kolom_nim' => $request->get('kolom_nim'),
            'kolom_nama' => $request->get('kolom_nama'),
            'kolom_umur' => $request->get('kolom_umur'),
            'kolom_alamat' => $request->get('kolom_alamat')
        ]);
        return redirect('mid')->with('status', 'Barang Berhasil DiTambahkan!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Midsemester  $midsemester
     * @return \Illuminate\Http\Response
     */
    public function show(Midsemester $midsemester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Midsemester  $midsemester
     * @return \Illuminate\Http\Response
     */
    public function edit(Midsemester $midsemester)
    {
        return view('uts/edit', compact('midsemester'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Midsemester  $midsemester
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Midsemester $midsemester)
    {
        $request->validate([
            'kolom_nim' => 'required',
            'kolom_nama' => 'required',
            'kolom_umur' => 'required',
            'kolom_alamat' => 'required'
        ]);
        Midsemester::where('id', $midsemester->id)
            ->update([
                'kolom_nim' => $request->kolom_nim,
                'kolom_nama' => $request->kolom_nama,
                'kolom_umur' => $request->kolom_umur,
                'kolom_alamat' => $request->kolom_alamat
            ]);
        return redirect('/ujian')->with('status', 'Data Berhasil DiEdit!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Midsemester  $midsemester
     * @return \Illuminate\Http\Response
     */
    public function destroy(Midsemester $midsemester)
    {
        Midsemester::destroy($midsemester->id_059);
        return redirect('/mid')->with('status', 'Data  Berhasil DiHapus!!!');
    }
}
