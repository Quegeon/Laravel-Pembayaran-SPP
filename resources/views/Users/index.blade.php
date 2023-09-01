@extends('layouts.master')
@section('title','Data User')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                @if (session()->has('status'))
                    <div class="alert alert-{{session('status.type')}}" role="alert">
                        {{ session('status.title') }}
                    </div>                          
                @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>Kelola Data Petugas</h4>
                            <a href="/user/create" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-stripped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>No / ID</th>
                                        <th>Nama Petugas</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $u)
                                    <tr>
                                        <td>{{$u->id}}</td>
                                        <td>{{$u->nama_petugas}}</td>
                                        <td>{{$u->username}}</td>
                                        <td>{{$u->level}}</td>
                                        <td>{{$u->created_at}}</td>
                                        <td>
                                            <a href="/user/{{$u->id}}/show" class="btn btn-warning">Edit</a>
                                            <a href="/user/{{$u->id}}/destroy" class="btn btn-danger" onclick="return confirm('Delete Data Ini?')">Delete</a>
                                            <a href="/user/{{$u->id}}/show-pwd" class="btn btn-warning">Change Password</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>    
@endsection