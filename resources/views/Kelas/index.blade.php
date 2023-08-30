@extends('layouts.master')
@section('title','Data Kelas')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if (session()->has('status'))
                        <div class="alert alert-{{ session('status.type') }}" role="alert">
                            {{session('status.title')}}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>Kelola Data Kelas</h4>
                            <a href="/kelas/create" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-stripped table-hovere table-bordered">
                                <thead>
                                    <tr>
                                        <th>No / ID</th>
                                        <th>Nama Kelas</th>
                                        <th>Kompetensi Keahlian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kelas as $k)                                        
                                    <tr>
                                        <td>{{$k->id}}</td>
                                        <td>{{$k->nama_kelas}}</td>
                                        <td>{{$k->kompetensi_keahlian}}</td>
                                        <td>
                                            <a href="/kelas/{{$k->id}}/show" class="btn btn-warning">Edit</a>
                                            <a href="/kelas/{{$k->id}}/destroy" class="btn btn-warning" onclick="return confirm('Hapus Data Ini?')">Delete</a>
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