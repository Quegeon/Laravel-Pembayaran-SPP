@extends('layouts.master')
@section('title','Ubah Data Pembayaran')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Ubah Data Pembayaran</h4>
                        </div>
                        <div class="card-body">
                            <form action="/pembayaran/{{$pembayaran->id}}/update" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Siswa</label>
                                    <select name="nis" class="form-control" required>
                                        <option value="{{$pembayaran->nis}}" selected>Default : -- {{$pembayaran->Siswa->nama}} --</option>
                                        @foreach ($siswa as $s)
                                        <option value="{{$s->nis}}">Nama : {{$s->nama}}  |  Kelas : {{$s->Kelas->nama_kelas}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>SPP</label>
                                    <select name="id_spp" class="form-control" required>
                                        <option value="{{$pembayaran->id_spp}}" selected>Default : -- {{$pembayaran->SPP->keterangan}} --</option>
                                        @foreach ($spp as $sp)
                                        <option value="{{$sp->id}}">Keterangan : {{$sp->keterangan}}  |  Nominal : {{$sp->nominal}}  |  Tahun : {{$sp->tahun}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Bayar</label>
                                    <input type="number" name="jumlah_bayar" class="form-control" value="{{$pembayaran->jumlah_bayar}}" placeholder="{{$pembayaran->jumlah_bayar}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Bayar</label>
                                    <input type="date" name="tgl_bayar" class="form-control" value="{{$pembayaran->tgl_bayar}}" placeholder="{{$pembayaran->tgl_bayar}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control" value="{{$pembayaran->keterangan}}" placeholder="{{$pembayaran->keterangan}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Petugas</label>
                                    <select name="id_petugas" class="form-control" required>
                                        <option value="{{$pembayaran->id_petugas}}" selected>Default : -- {{$pembayaran->User->nama_petugas}} --</option>
                                        @foreach ($user as $u)
                                        <option value="{{$u->id}}">{{$u->nama_petugas}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection