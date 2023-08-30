@extends('layouts.master')
@section('title','Tambah Data Siswa')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Tambah Data Siswa</h4>
                        </div>
                        <div class="card-body">
                            <form action="/siswa/store" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>NIS</label>
                                    <input type="number" name="nis" class="form-control" placeholder="Masukkan NIS" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <select name="nama_kelas" class="form-control" required>
                                        @foreach ($kelas as $k)
                                            <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>No Telp</label>
                                    <input type="text" name="no_telp" class="form-control" placeholder="Masukkan No Telp" required>
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