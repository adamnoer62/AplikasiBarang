<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\produk;

class AdminController extends Controller
{
    function index(){
        $produks = produk::all();
        return view('dashboards.admins.index', ['produks' => $produks]);
       }
    
       function profile(){
           return view('dashboards.admins.profile');
       }
       function settings(){
           return view('dashboards.admins.settings');
       }

       
     
    public function create()
    {
        return view('dashboards.admins.create');
    }
    public function store(Request $request)
{
    $request->validate([
            'nomorbarang' => 'required',
            'namabarang' => 'required',
            'jenisbarang' => 'required',
        ]);

        produk::create($request->all());
    return redirect()->route('admin.dashboard')
        ->with('success_message', 'Berhasil menambah user baru');
}

public function update(Request $request, $id)
{
    //melakukan validasi data
    $request->validate([
        'nomorbarang' => 'required',
        'namabarang' => 'required',
        'jenisbarang' => 'required',
    ]);

    //fungsi eloquent untuk mengupdate data inputan kita
    produk::find($id)->update($request->all());

    //jika data berhasil diupdate, akan kembali ke halaman utama
    return redirect()->route('admin.index')
        ->with('success', 'User Berhasil Diupdate');
}


public function edit($id)
{
    //menampilkan detail data dengan menemukan/berdasarkan id user untuk diedit
    $produks = produk::find($id);
    return view('dashboards.admins.edit', compact('produks'));
}
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        produk::find($id)->delete();
        return redirect()->route('admin.index')
            ->with('success', 'User Berhasil Dihapus');
    }
}


