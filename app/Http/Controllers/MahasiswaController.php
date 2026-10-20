<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::orderBy('created_at', 'desc')->get();
        return view('mahasiswa.index', compact('data'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim'     => 'required|numeric|digits_between:5,15|unique:mahasiswas,nim',
            'nama'    => 'required|string|max:100',
            'jk'      => 'required|in:L,P',
            'prodi'   => 'required|string|max:100',
            'no_telp' => 'required|numeric|digits_between:10,20',
            'alamat'  => 'required|string|max:500',
        ], [
            'nim.required'        => 'NIM wajib diisi.',
            'nim.numeric'         => 'NIM harus berupa angka.',
            'nim.digits_between'  => 'NIM harus antara 5 sampai 15 digit.',
            'nim.unique'          => 'NIM sudah terdaftar.',
            'nama.required'       => 'Nama wajib diisi.',
            'nama.max'            => 'Nama maksimal 100 karakter.',
            'jk.required'         => 'Jenis kelamin wajib dipilih.',
            'jk.in'               => 'Jenis kelamin tidak valid.',
            'prodi.required'      => 'Program studi wajib diisi.',
            'prodi.max'           => 'Program studi maksimal 100 karakter.',
            'no_telp.required'    => 'Nomor telepon wajib diisi.',
            'no_telp.numeric'     => 'Nomor telepon harus berupa angka.',
            'no_telp.digits_between' => 'Nomor telepon harus antara 10 sampai 20 digit.',
            'alamat.required'     => 'Alamat wajib diisi.',
            'alamat.max'          => 'Alamat maksimal 500 karakter.',
        ]);

        Mahasiswa::create($validated);

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil disimpan!');
    }

    public function edit($nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);

        $validated = $request->validate([
            'nim'     => 'required|numeric|digits_between:5,15|unique:mahasiswas,nim,' . $nim . ',nim',
            'nama'    => 'required|string|max:100',
            'jk'      => 'required|in:L,P',
            'prodi'   => 'required|string|max:100',
            'no_telp' => 'required|numeric|digits_between:10,20',
            'alamat'  => 'required|string|max:500',
        ], [
            'nim.required'        => 'NIM wajib diisi.',
            'nim.numeric'         => 'NIM harus berupa angka.',
            'nim.digits_between'  => 'NIM harus antara 5 sampai 15 digit.',
            'nim.unique'          => 'NIM sudah terdaftar.',
            'nama.required'       => 'Nama wajib diisi.',
            'nama.max'            => 'Nama maksimal 100 karakter.',
            'jk.required'         => 'Jenis kelamin wajib dipilih.',
            'jk.in'               => 'Jenis kelamin tidak valid.',
            'prodi.required'      => 'Program studi wajib diisi.',
            'prodi.max'           => 'Program studi maksimal 100 karakter.',
            'no_telp.required'    => 'Nomor telepon wajib diisi.',
            'no_telp.numeric'     => 'Nomor telepon harus berupa angka.',
            'no_telp.digits_between' => 'Nomor telepon harus antara 10 sampai 20 digit.',
            'alamat.required'     => 'Alamat wajib diisi.',
            'alamat.max'          => 'Alamat maksimal 500 karakter.',
        ]);

        $mahasiswa->update($validated);

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diupdate!');
    }

    public function destroy($nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
