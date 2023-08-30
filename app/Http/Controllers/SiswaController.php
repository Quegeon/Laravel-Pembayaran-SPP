<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Error;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('Siswa.index', compact(['siswa']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('Siswa.create', compact(['kelas']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->nama_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            $request->except(['_token'])
        ]);

        return redirect('/siswa')->with('status', [
            'title' => 'Data Has Been Added',
            'type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        $kelas = Kelas::all();
        return view('Siswa.show', compact(['siswa','kelas']));
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
        $siswa = Siswa::find($id);
        $siswa->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->nama_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            $request->except(['_token'])
        ]);

        return redirect('/siswa')->with('status', [
            'title' => 'Data Has Been Updated',
            'type' => 'success'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        
        return redirect('/siswa')->with('status', [
            'title' => 'Data Has Been Deleted',
            'type' => 'warning'
        ]);
    }
}
