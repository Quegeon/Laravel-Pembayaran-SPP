@extends('layouts.master')
@section('title','Kelola Data SPP')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                @if (session()->has('status'))
                    <div class="alert alert-{{ session('status.type') }}" role="alert">
                        {{ session('status.title') }}
                    </div>
                @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>Kelola Data SPP</h4>
                            <a href="/spp/create" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-stripped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>No / ID</th>
                                        <th>Keterangan</th>
                                        <th>Tahun</th>
                                        <th>Nominal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($spp as $s)                                        
                                    <tr>
                                        <td>{{$s->id}}</td>
                                        <td>{{$s->keterangan}}</td>
                                        <td>{{$s->tahun}}</td>
                                        <td>Rp. {{number_format($s->nominal,2,',','.')}}</td>
                                        <td>
                                            <a href="/spp/{{$s->id}}/show" class="btn btn-warning">Edit</a>
                                            <a href="/spp/{{$s->id}}/destroy" class="btn btn-danger" onclick="return confirm('Delete Data Ini?')">Delete</a>
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