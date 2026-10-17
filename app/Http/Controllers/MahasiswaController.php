<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;


class MahasiswaController extends Controller
{
    public function index(){
        $data = Mahasiswa::all();
        dd($data);
        return view('mahasiswa.index', compact('data'));
    }


    public function create (){

    }

    public function store (){

    }

    public function edit(){
        $data  = Mahasiswa::where('nim', '251011700592')-get();
        return view('mahasiswa.edit', compact('data'));
    }

    public function update (){

    }

    public function destroy (){
        
    }

}
