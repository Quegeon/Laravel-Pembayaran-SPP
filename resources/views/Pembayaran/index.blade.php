@extends('layouts.master')
@section('title','Kelola Data Pembayaran')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Kelola Data Pembayaran</h4>
                            <a href="/pembayaran/create" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-stripped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>No / ID</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>SPP</th>
                                        <th>Nominal</th>
                                        <th>Tahun</th>
                                        <th>Keterangan</th>
                                        <th>Jumlah Bayar</th>
                                        <th>Tanggal Bayar</th>
                                        <th>Petugas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pembayaran as $p)                                        
                                    <tr>
                                        <td>{{$p->id}}</td>
                                        <td>{{$p->Siswa->nama_siswa}}</td>
                                        <td>{{$p->Siswa->Kelas->nama_kelas}}</td>
                                        <td>{{$p->SPP->keterangan}}</td>
                                        <td>{{$p->SPP->nominal}}</td>
                                        <td>{{$p->SPP->tahun}}</td>
                                        <td>{{$p->tgl_bayar}}</td>
                                        <td>{{$p->jumlah_bayar}}</td>
                                        <td>{{$p->User->nama_petugas}}</td>
                                        <td>{{$p->keterangan}}</td>
                                        <td>
                                            <a href="/pembayaran/{{$p->id}}/show" class="btn btn-warning">Edit</a>
                                            <a href="/pembayaran/{{$p->id}}/destroy" class="btn btn-warning">Hapus</a>
                                        </td>
                                    @endforeach
                                    </tr>
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