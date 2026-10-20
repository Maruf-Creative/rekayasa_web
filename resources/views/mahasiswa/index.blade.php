@extends('layouts.main')
@section('title', 'Daftar Data Mahasiswa')

@section('content')
<div class="table-card">
    <div class="table-header-bar">
        <div>
            <h2>Data Mahasiswa</h2>
            <p style="color: #64748b; margin-top: 4px; font-size: 0.9rem;">Kelola informasi data mahasiswa aktif</p>
        </div>
        <div>
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">
                + Tambah Mahasiswa
            </a>
        </div>
    </div>

    <div style="padding: 1.5rem 1.5rem 0 1.5rem;">
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                <strong>Sukses!</strong> {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger" role="alert">
                <strong>Gagal!</strong> {{ session('error') }}
            </div>
        @endif
    </div>

    <div class="table-container" style="padding: 0 1.5rem 1.5rem 1.5rem;">
        <table class="data-table">
            <thead>
                <tr>
                    <th style="width: 50px;">No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Program Studi</th>
                    <th>No. Telepon</th>
                    <th>Alamat</th>
                    <th style="width: 140px; text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $index => $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><strong>{{ $item->nim }}</strong></td>
                        <td>{{ $item->nama }}</td>
                        <td>
                            @if($item->jk == 'L')
                                <span class="badge badge-pinjam">Laki-Laki</span>
                            @else
                                <span class="badge badge-kembali">Perempuan</span>
                            @endif
                        </td>
                        <td>{{ $item->prodi }}</td>
                        <td>{{ $item->no_telp }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td style="text-align: center;">
                            <div class="action-btns" style="justify-content: center;">
                                <a href="{{ route('mahasiswa.edit', $item->nim) }}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>
                                <form action="{{ route('mahasiswa.destroy', $item->nim) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data mahasiswa {{ $item->nama }} (NIM: {{ $item->nim }})?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">
                            <div class="empty-state">
                                <p><strong>Belum ada data mahasiswa yang tersimpan.</strong></p>
                                <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary btn-sm">
                                    Tambah Data Sekarang
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection