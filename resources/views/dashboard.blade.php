@extends('layouts.master')
@section('title','Dashboard')
@section('content')    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            @if (session()->has('status'))
                <div class="alert alert-{{ session('status.type') }}">
                  {{ session('status.title') }}
                </div>
            @endif
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$siswa_count}}</h3>

                <p>Siswa Terdaftar</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/siswa" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$kelas_count}}</h3>

                <p>Jumlah Kelas</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/kelas" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                  @if ($total_transaksi->total_price == null)
                  Rp. 0
                  @else
                  Rp. {{ number_format($total_transaksi->total_price,2,',','.') }}
                  @endif
                </h3>

                <p>Total Transaksi Bulan Ini</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/pembayaran" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
    </section>


    <section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Histori Transaksi</h3>
                </div>
                <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Siswa</th>
                      <th>SPP</th>
                      <th>Tanggal Bayar</th>
                      <th>Jumlah Bayar</th>
                      <th>Petugas</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pembayaran as $p)
                      <tr>
                        <td>{{ $loop->iteration }}</td></td>
                        <td>{{ $p->Siswa->nis }} - {{ $p->Siswa->nama }}</td>
                        <td>{{ $p->SPP->keterangan }} {{ $p->SPP->tahun }}</td>
                        <td>{{ $p->tgl_bayar }}</td>
                        <td>Rp. {{ number_format($p->jumlah_bayar,2,',','.') }}</td>
                        <td>{{ $p->User->nama_petugas }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>
@endsection
