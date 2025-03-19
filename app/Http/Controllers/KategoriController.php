<?php

namespace App\Http\Controllers;

use App\DataTables\ManagekategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable){
        return $dataTable->render('kategori.index');
    }
    public function manage(ManagekategoriDataTable $dataTable){
        return $dataTable->render('kategori.manage');
    }
    public function create(){
        return view('kategori.create');
    }
    public function store(Request $request){
        KategoriModel::create([
            'kategori_kode'=>$request->kodeKategori,
            'kategori_nama'=>$request->namaKategori,
        ]);
        return redirect('/kategori');
    }
    public function ubah($id){
        $kategori = KategoriModel::find($id);
        return view('kategori.ubah',compact('kategori'));
    }
    public function simpan_ubah($id,Request $request){
        $kategori=KategoriModel :: find($id);
        $kategori->kategori_kode=$request->kategori_kode;
        $kategori->kategori_nama=$request->kategori_nama;
        $kategori->save();
        return redirect('/kategori');
    }

    public function delete($id){
        $kategori = KategoriModel::find($id);
        $kategori->delete();
        return redirect('/kategori');
        
    }
}
