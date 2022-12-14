<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasien;
use App\Models\antrian;


class AntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["antrian"] = Antrian::all();
        $data["pasien"] = Pasien::all();
        return view("dokter.antrian.index", $data);
        $dataAntrian = antrian::join('pasien', 
                                    'antrian.idAntrian','=','pasien.idPasien')
                                ->get();
        return view('dokter.antrian.index', compact('judul', 'title', 'slug', 'dataAntrian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $judul = 'DOKTER SIANTON';
        // $title = 'Antrian';
        // $slug = 'antrian';
        // $dataAntrian = antrian::all();
        // return view('antrian.create', compact('judul', 'title', 'slug', 'dataAntrian'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $result = antrian::insert([
        //     'idAntrian' => $request->idAntrian,
        //     'jamPeriksa'=> $request->jamPeriksa,
        //     'noAntrian' => $request->noAntrian,
        //     'created_at'=> now(),
        //     'updated_at'=> now()
        // ]);
        // if($result){
        //     return redirect('/antrian');
        // } else {
        //     return $this->create();
        // }
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
        // $judul = 'DOKTER SIANTON';
        // $title = 'Antrian';
        // $slug = 'antrian';
        // $dataAntrian = antrian::join('pasien', 'antrian.idPasien','=','pasien.idPasien')
        //                     ->where('idAntrian', '=', $id)
        //                     ->first();
        // $dataPasien = pasien::all();
        // return view('antrian.update', compact('judul', 'title', 'slug', 'dataAntrian'));
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
        // $id = $request->id;
        // antrian::where('idAntrian', $id)->update([
        //     'idAntrian' => $request->id,
        //     'jamPeriksa' => $request->jamPeriksa,
        //     'noAntrian'=> $request->noAntrian
        // ]);
        // return redirect('/antrian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//     public function destroy($id)
//     {
//     //     antrian::where('idAntrian', $id)
//     //     ->delete();
//     //     return redirect('/antrian');
//     }
}
