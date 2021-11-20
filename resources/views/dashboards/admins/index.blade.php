@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')





@section('content')

<div class="container-fluid">
    <h3 class="h3 mb-4 text-gray-800">Data barang</h3>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('admin.create')}}" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">Tambah Data</span>
            </a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>nomorbarang</th>
                            <th>namabarang</th>
                            <th>jenisbarang</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produks as $pgw)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $pgw->nomorbarang}}</td>
                            <td>{{ $pgw->namabarang}}</td>
                            <td>{{ $pgw->jenisbarang}}</td>
                            <td>
                                <form action="{{ route('admin.destroy',$pgw->id) }}" method="POST">
   
                    
                                    <a class="btn btn-primary" href="{{ route('admin.edit',$pgw->id) }}">Edit</a>
                   
                                    @csrf
                                    @method('DELETE')
                      
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

