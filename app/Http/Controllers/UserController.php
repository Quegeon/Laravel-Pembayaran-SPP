<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('Users.index', compact(['user']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'nama_petugas' => $request->nama_petugas,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            $request->except(['_token']),
        ]);
        return redirect('/user')->with('status',[
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
        $user = User::find($id);
        return view('Users.show', compact(['user']));
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
        $user = User::find($id);
        $user->update([
            'nama_petugas' => $request->nama_petugas,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            $request->except(['_token'])
        ]);
        return redirect('/user')->with('status',[
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
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('status',[
            'title' => 'Data Has Been Deleted!',
            'type' => 'warning'
        ]);
    }

    public function show_pwd($id)
    {
        $user = User::find($id);
        return view('Users.show-pwd', compact(['user']));
    }

    public function chpwd(Request $request, $id)
    {
        $npass = $request->npass;
        $cpass = $request->cpass;

        if ($npass !== $cpass ) {

            return redirect("/user/$id/show-pwd")->with('status',[
                'title' => 'Password Does Not Match!',
                'type' => 'danger'
            ]);

        } else {

            $user = User::find($id);
            $user->update([
                'password' => bcrypt($cpass),
                $request->except(['_token'])
            ]);
            
            return redirect('/user')->with('status',[
                'title' => 'Password Has Been Changed!',
                'type' => 'success'
            ]);
        }
    }
}
