@extends('layouts.master')
@section('title','Tambah Data SPP')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Tambah Data SPP</h4>
                        </div>
                        <div class="card-body">
                            <form action="/spp/store" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control" placeholder="Masukkan Keterangan" required>
                                </div>
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <input type="number" name="tahun" class="form-control" placeholder="Masukkan Tahun" required>
                                </div>
                                <div class="form-group">
                                    <label>Nominal</label>
                                    <input type="number" name="nominal" class="form-control" placeholder="Masukkan Nominal" required>
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