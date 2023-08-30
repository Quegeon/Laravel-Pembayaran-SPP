<?php

namespace App\Http\Controllers;

use App\Models\SPP;
use Illuminate\Http\Request;

class SPPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spp = SPP::all();
        return view('SPP.index', compact(['spp']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SPP.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SPP::create([
            'keterangan' => $request->keterangan,
            'tahun' => $request->tahun,
            'nominal' => $request->nominal,
            $request->except(['_token'])
        ]);

        return redirect('/spp')->with('status',[
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
        $spp = SPP::find($id);
        return view('SPP.show', compact(['spp']));
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
        $spp = SPP::find($id);
        $spp->update([
            'keterangan' => $request->keterangan,
            'tahun' => $request->tahun,
            'nominal' => $request->nominal,
            $request->except(['_token'])
        ]);

        return redirect('/spp')->with('status',[
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
        $spp = SPP::find($id);
        $spp->delete();
        
        return redirect('/spp')->with('status',[
            'title' => 'Data Has Been Deleted',
            'type' => 'warning'
        ]);
    }
}
