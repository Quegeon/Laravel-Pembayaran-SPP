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
                                    <select name="nama_kelas" class="form-control">
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kompetensi Keahlian</label>
                                    <select name="kompetensi_keahlian" class="form-control">
                                        <option value="PPLG">Pengembangan Perangkat Lunak dan Gim</option>
                                        <option value="TMS">Teknik Pemesinan</option>
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