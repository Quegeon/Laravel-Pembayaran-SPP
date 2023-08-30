@extends('layouts.master')
@section('title','Tambah Data Pembayaran')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Tambah Data Pembayaran</h4>
                        </div>
                        <div class="card-body">
                            <form action="/pembayaran/store" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Siswa</label>
                                    <select name="nis" class="form-control" required>
                                        @foreach ($siswa as $s)
                                        <option value="{{$s->nis}}">Nama : {{$s->nama}}  |  Kelas : {{$s->Kelas->nama_kelas}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>SPP</label>
                                    <select name="id_spp" class="form-control" required>
                                        @foreach ($spp as $sp)
                                        <option class="form-contol" value="{{$sp->id}}">Keterangan : {{$sp->keterangan}}  |  Nominal : {{$sp->nominal}}  |  Tahun : {{$sp->tahun}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Bayar</label>
                                    <input type="number" name="jumlah_bayar" class="form-control" placeholder="Masukkan Jumlah Bayar" max="{{$sp->nominal}}" min="1000" required>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Tanggal Bayar</label>
                                    <input type="date" name="tgl_bayar" class="form-control" placeholder="tgl_bayar" required>
                                </div> --}}
                                <div class="form-group">
                                    <label>Petugas</label>
                                    <select name="id_petugas" class="form-control" required>
                                        @foreach ($user as $u)
                                        <option value="{{$u->id}}">{{$u->nama_petugas}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea name="keterangan" class="form-control" placeholder="Masukkan Keterangan"></textarea>
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