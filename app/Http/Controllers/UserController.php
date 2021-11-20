<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;
use App\Models\produk;

class UserController extends Controller
{
   function index(){
    $produks = produk::all();
    return view('dashboards.users.index', ['produks' => $produks]);
   }

   function profile(){
       return view('dashboards.users.profile');
   }
   function settings(){
       return view('dashboards.users.settings');
   }
   public function create()
   {
       return view('dashboards.users.create');
   }
   public function store(Request $request)
{
   $request->validate([
           'nomorbarang' => 'required',
           'namabarang' => 'required',
           'jenisbarang' => 'required',
       ]);

       produk::create($request->all());
   return redirect()->route('user.dashboard')
       ->with('success_message', 'Berhasil menambah user baru');

       activity()->log('menambah data barang');
       return response()->json([
           'route' => route('user.dashboard')
       ]);
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
   return redirect()->route('user.index')
       ->with('success', 'User Berhasil Diupdate');
}


public function edit($id)
{
   //menampilkan detail data dengan menemukan/berdasarkan id user untuk diedit
   $produks = produk::find($id);
   return view('dashboards.users.edit', compact('produks'));
}
   public function destroy($id)
   {
       //fungsi eloquent untuk menghapus data
       produk::find($id)->delete();
       return redirect()->route('users.index')
           ->with('success', 'User Berhasil Dihapus');
   }
}
