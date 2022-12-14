<?php

namespace App\Http\Controllers;
use App\Models\jadwal_praktik;

use Illuminate\Http\Request;

class JadwalPraktikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul = 'ADMIN SIANTON';
        $title = 'Jadwal Praktik';
        $slug = 'jadwalpraktik';
        $dataJadwal = jadwal_praktik::all();
        return view('admin.jadwalpraktik.index', compact('title', 'judul', 'slug', 'dataJadwal'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $judul = 'ADMIN SIANTON';
        $title = 'Jadwal Praktik';
        $slug = 'jadwalpraktik';
        $dataJadwal = jadwal_praktik::where('kodeJadwal', '=', $id)
                        ->first();
        return view('admin.jadwalpraktik.update', compact('title', 'judul', 'slug', 'dataJadwal'));
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
        $id = $request->kodeJadwal;
        jadwal_praktik::where('kodeJadwal', $id)
            ->update([
                'hari' => $request->hari,
                'tanggal' => $request->tanggal,
                'jam' => $request->jam
            ]);
        return redirect('/jadwalpraktik')->with('success','Update jadwal praktik berhasil!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
