<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Toko;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\Storage;

class TokoController extends Controller
{
    public function showindex(Request $request){
        if($request->has('search')){
            $datas = Toko::where('nama_produk', 'LIKE', '%' .$request->search. '%')->paginate(5);
        } else {
            $datas = Toko::paginate(5);
        }

        
        return view('index', compact('datas'));
    }
     
    public function showadd(){
        return view('add');
        // $toko = toko::all();
        // return view('add', [
        //     'toko' => $toko 
        //    ]);
    }
    
    public function create(request $request){
        $data = new Toko();
        $data->nama_produk= $request->nama_produk;
        $data->harga_produk= $request->harga_produk;

        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('img/', $request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        // }
        if ($request->hasFile('foto')) {
            $gambar= $request->file('foto');
            $namaFile = time() . '.' . $gambar->getClientOriginalExtension();
            
            $fileGambar= Image::make($gambar->getRealPath());

            $fileGambar->resize(256, 256, function ($constraint) {
                $constraint->aspectRatio();                 
            });
            
            $fileGambar->stream(); // <-- Key point

            Storage::put('public/images/'.$namaFile, $fileGambar);
            
            $data->foto = 'images/'.$namaFile;
        }
        
        $data->save();
        

        return redirect("/")->with('success', 'Data Berhasil Ditambahkan!!!');
        
    }

    public function showedit($id){
       $toko = Toko::find($id);
    //    $matakuliah = Matakuliah::all();
       return view('edit', [
        'toko' => $toko, 
        // 'matakuliah' => $matakuliah 
       ]);
    }
    
    public function edit(request $request){
        // dd($request->id);
        $data = Toko::find($request->id);

        $data->nama_produk= $request->nama_produk;
        $data->harga_produk= $request->harga_produk;
        // Toko::where(['id' => $request->id])->update($edit);

        if ($request->hasFile('foto')) {
            $gambar= $request->file('foto');
            $namaFile = time() . '.' . $gambar->getClientOriginalExtension();
            
            $fileGambar= Image::make($gambar->getRealPath());

            $fileGambar->resize(256, 256, function ($constraint) {
                $constraint->aspectRatio();                 
            });
            
            $fileGambar->stream(); // <-- Key point

            Storage::put('public/images/'.$namaFile, $fileGambar);
            
            $data->foto = 'images/'.$namaFile;
        }
        $data->save();
        return redirect('/')->with('success', 'Data Berhasil Di Edit!!!');
        
    }

    public function destroy($id){
        $dat = Toko::find($id);
        $dat -> delete();
        return redirect('/')->with('success', 'Data Berhasil Di Hapus!!!');
        
    }

    // notifikasi
    // public function index(){
    //     return view('add');
    // }

    // public function pesan(){
    //     return redirect('/pesan')->with(['success' => 'Pesan Berhasil']);
    // }
}
