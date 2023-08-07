@extends('layouts.master')
@section('title','Tambah Data Kelas')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Tambah Data Kelas</h4>
                        </div>
                        <div class="card-body">
                            <form action="/kelas/store" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Nama Kelas</label>
                                    <input type="text" name="nama_kelas" class="form-control" placeholder="Masukkan Nama Kelas" required>
                                </div>
                                <div class="form-group">
                                    <label>Kompetensi Keahlian</label>
                                    <select name="kompetensi_keahlian" class="form-control" required>
                                        <option value="Pengembangan Perangkat Lunak dan Gim">Pengembangan Perangkat Lunak dan Gim</option>
                                        <option value="Teknik Pemesinan">Teknik Pemesinan</option>
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