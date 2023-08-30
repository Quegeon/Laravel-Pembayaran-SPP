@extends('layouts.master')
@section('title','Edit User Password')
@section('content')
<div class="content-wrapper">
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                @if (session()->has('status'))
                    <div class="alert alert-{{session('status.type')}}" role="alert">
                        {{ session('status.title') }}
                    </div>                          
                @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>Ubah Password {{$user->username}}</h4>
                        </div>
                        <div class="card-body">
                            <form action="/user/{{$user->id}}/chpwd" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="text" class="form-control" name="npass" placeholder="Masukkan Password Baru" required>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" name="cpass" placeholder="Konfirmasi Password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection