@extends('layouts.master')
@section('title','Data Siswa')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                @if (session()->has('status'))
                    <div class="alert alert-{{session('status.type')}}" role="alert">
                        {{session('status.title')}}
                    </div>
                @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>Kelola Data Siswa</h4>
                            <a href="/siswa/create" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-stripped table-hover table-bordered">
                                <thead>
                                    <tr> 
                                        <th>NIS</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>Alamat</th>
                                        <th>No Telp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswa as $s)                                        
                                    <tr>
                                        <td>{{$s->nis}}</td>
                                        <td>{{$s->nama}}</td>
                                        <td>{{$s->Kelas->nama_kelas}}</td>
                                        <td>{{$s->alamat}}</td>
                                        <td>{{$s->no_telp}}</td>
                                        <td>
                                            <a href="/siswa/{{$s->nis}}/show" class="btn btn-warning">Edit</a>
                                            <a href="/siswa/{{$s->nis}}/destroy" class="btn btn-warning" onclick="return confirm('Delete Data Ini?')">Delete</a>
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