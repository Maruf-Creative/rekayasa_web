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

}
