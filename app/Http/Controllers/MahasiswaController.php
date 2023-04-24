<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        $data = Mahasiswa::all();
        return view('datamahasiswa',compact('data'));
    }

    public function tambahdata(){
        return view('tambahdata');
    }

    public function insert(Request $request){
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa');
    }

    public function tampil($id){
        $data = Mahasiswa::find($id);
        return view('tampil', compact('data'));
    }

    public function editdata(Request $request, $id){
        $data = Mahasiswa::find($id);
        $data->update($request->all());
        return redirect()->route('mahasiswa');
    }

    public function delete($id){
        $data = Mahasiswa::find($id); 
        $data->delete();
        return redirect()->route('mahasiswa');
    }
}
