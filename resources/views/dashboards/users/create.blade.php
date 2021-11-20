@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Settings')

@section('content')

<form action="{{route('user.store')}}" method="post">
    @csrf
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="form-group row">
                    <label for="nomorbarang" class="col-sm-4 col-form-label">nomorbarang</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('nomorbarang') is-invalid @enderror" id="nomorbarang" name="nomorbarang" value="{{ old('nomorbarang')}}">
                        @error('nomorbarang')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="namabarang" class="col-sm-4 col-form-label">namabarang</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('namabarang') is-invalid @enderror" id="namabarang" name="namabarang" value="{{ old('namabarang')}}">
                        @error('namabarang')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenisbarang" class="col-sm-4 col-form-label">jenisbarang</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('jenisbarang') is-invalid @enderror" id="jenisbarang" name="jenisbarang" value="{{ old('jenisbarang')}}">
                        @error('jenisbarang')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{route('user.dashboard')}}" class="btn btn-default">
                    Batal
                </a>
            </div>
        </div>
    </div>
</div>

@endsection