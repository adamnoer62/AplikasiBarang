@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Settings')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Barang</div>

                <div class="card-body">
                <form method="POST" action="{{ route('admin.update',$produks->id) }}">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">nomorbarang</label>
                    <input type="text" name="nomorbarang" class="form-control"  aria-describedby="namabarang" value="{{$produks->nomorbarang}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">namabarang</label>
                    <input type="text" name="namabarang" class="form-control"  aria-describedby="namabarang" value="{{$produks->namabarang}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">jenisbarang</label>
                    <input type="text" name="jenisbarang" class="form-control"  aria-describedby="jenisbarang" value="{{$produks->jenisbarang}}">
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

