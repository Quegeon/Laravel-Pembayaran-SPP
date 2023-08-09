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
                            <form action="/pembayaran/create" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Nama Siswa</label>
                                    <select name="nis" required>
                                        @foreach ($siswa as $s)                                            
                                        <optgroup label="{{$s->nama_kelas}}">
                                            
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group"></div>
                                <div class="form-group"></div>
                                <div class="form-group"></div>
                                <div class="form-group"></div>
                                <div class="form-group"></div>
                                <div class="form-group"></div>
                                <div class="form-group"></div>
                                <div class="form-group"></div>
                                <div class="form-group"></div>
                                <div class="form-group"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection