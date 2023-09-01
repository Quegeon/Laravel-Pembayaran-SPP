@extends('layouts.master')
@section('title','Kelola Data Pembayaran')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                @if (session()->has('status'))
                    <div class="alert alert-{{session('status.type')}}">
                        {{session('status.title')}}
                    </div>
                @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>Kelola Data Pembayaran</h4>
                            <a href="/pembayaran/create" class="btn btn-primary">Tambah Data</a>
                            <a href="/pembayaran/print" class="btn btn-secondary">Print</a>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-stripped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>No / ID</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>SPP</th>
                                        <th>Nominal</th>
                                        <th>Tahun</th>
                                        <th>Tanggal Bayar</th>
                                        <th>Jumlah Bayar</th>
                                        <th>Petugas</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pembayaran as $p)                                        
                                    <tr>
                                        <td>{{$p->id}}</td>
                                        <td>{{$p->Siswa->nama}}</td>
                                        <td>{{$p->Siswa->Kelas->nama_kelas}}</td>
                                        <td>{{$p->SPP->keterangan}}</td>
                                        <td>Rp. {{number_format($p->SPP->nominal,2,',','.')}}</td>
                                        <td>{{$p->SPP->tahun}}</td>
                                        <td>{{$p->tgl_bayar}}</td>
                                        <td>Rp. {{number_format($p->jumlah_bayar,2,',','.')}}</td>
                                        <td>{{$p->User->nama_petugas}}</td>
                                        <td>{{$p->keterangan}}</td>
                                        <td>
                                            <a href="/pembayaran/{{$p->id}}/show" class="btn btn-warning">Edit</a>
                                            <a href="/pembayaran/{{$p->id}}/destroy" class="btn btn-danger" onclick="return confirm('Delete Data Ini?')">Hapus</a>
                                            <a href="/pembayaran/{{ $p->id }}/receipt" class="btn btn-success">Receipt</a>
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