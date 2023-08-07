@extends('layouts.master')
@section('title','Ubah Data Siswa')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Ubah Data Siswa</h4>
                        </div>
                        <div class="card-body">
                            <form action="/siswa/{{$siswa->nis}}/update" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>NIS</label>
                                    <input type="number" name="nis" class="form-control" placeholder="{{$siswa->nis}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="{{$siswa->nama}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <select name="nama_kelas" class="form-control" required>
                                        <option value="{{$siswa->id_kelas}}" selected>Default : -- {{$siswa->Kelas->nama_kelas}} --</option>
                                        @foreach ($kelas as $k)
                                        <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" placeholder="{{$siswa->alamat}}" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>No Telp</label>
                                    <input type="text" name="no_telp" class="form-control" placeholder="{{$siswa->no_telp}}" required>
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