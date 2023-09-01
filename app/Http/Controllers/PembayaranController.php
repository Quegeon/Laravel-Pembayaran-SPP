<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\SPP;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view('Pembayaran.index', compact(['pembayaran']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        $spp = SPP::all();
        $user = User::all();
        return view('Pembayaran.create', compact(['siswa','spp','user']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pembayaran::create([
            'nis' => $request->nis,
            'id_spp' => $request->id_spp,
            'id_petugas' => $request->id_petugas,
            'tgl_bayar' => Carbon::today(),
            'jumlah_bayar' => $request->jumlah_bayar,
            'keterangan' => $request->keterangan,
            $request->except(['_token'])
        ]);

        return redirect('/pembayaran')->with('status',[
            'title' => 'Data has been added',
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
        $pembayaran = Pembayaran::find($id);
        $siswa = Siswa::all();
        $spp = SPP::all();
        $user = User::all();
        return view('Pembayaran.show', compact(['pembayaran','siswa','spp','user']));
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
        $pembayaran = Pembayaran::find($id);
        $pembayaran->update([
            'nis' => $request->nis,
            'id_spp' => $request->id_spp,
            'id_petugas' => $request->id_petugas,
            'jumlah_bayar' => $request->jumlah_bayar,
            'tgl_bayar' => $request->tgl_bayar,
            'keterangan' => $request->keterangan,
            $request->except(['_token'])
        ]);

        return redirect('/pembayaran')->with('status',[
            'title' => 'Data has been updated',
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
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete();
        return redirect('/pembayaran')->with('status',[
            'title' => 'Data has been deleted',
            'type' => 'warning'
        ]);   
    }

    public function print () {
        $pembayaran = Pembayaran::all();
        $year = Carbon::today()->year;
        return view('Pembayaran.print', compact(['pembayaran','year']));
    }

    public function receipt($id) {
        $pembayaran = Pembayaran::find($id);
        return view('Pembayaran.receipt', compact(['pembayaran']));
    }
}
