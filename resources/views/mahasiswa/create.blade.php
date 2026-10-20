@extends('layouts.main')
@section('title', 'Tambah Data Mahasiswa')

@section('content')
<div class="form-container" style="max-width: 750px; margin: 0 auto;">
    <div style="margin-bottom: 1.5rem; border-bottom: 2px solid #eee; padding-bottom: 1rem;">
        <h2 style="color: #39BCC8; margin-bottom: 0.3rem;">Tambah Data Mahasiswa</h2>
        <p style="color: #64748b; font-size: 0.95rem;">Lengkapi formulir di bawah ini untuk menambahkan data mahasiswa baru.</p>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <div>
                <strong>Perhatian!</strong> Terjadi kesalahan dalam pengisian form:
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nim">Nomor Induk Mahasiswa (NIM) <span style="color: #e74c3c;">*</span></label>
            <input type="text" 
                   id="nim" 
                   name="nim" 
                   value="{{ old('nim') }}" 
                   class="{{ $errors->has('nim') ? 'is-invalid' : '' }}" 
                   placeholder="Contoh: 251011700592" 
                   required>
            @error('nim')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="nama">Nama Lengkap <span style="color: #e74c3c;">*</span></label>
            <input type="text" 
                   id="nama" 
                   name="nama" 
                   value="{{ old('nama') }}" 
                   class="{{ $errors->has('nama') ? 'is-invalid' : '' }}" 
                   placeholder="Masukkan nama lengkap mahasiswa" 
                   required>
            @error('nama')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="jk">Jenis Kelamin <span style="color: #e74c3c;">*</span></label>
            <select id="jk" name="jk" class="{{ $errors->has('jk') ? 'is-invalid' : '' }}" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="L" {{ old('jk') == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                <option value="P" {{ old('jk') == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
            @error('jk')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="prodi">Program Studi <span style="color: #e74c3c;">*</span></label>
            <input type="text" 
                   id="prodi" 
                   name="prodi" 
                   value="{{ old('prodi') }}" 
                   class="{{ $errors->has('prodi') ? 'is-invalid' : '' }}" 
                   placeholder="Contoh: Teknik Informatika, Sistem Informasi" 
                   required>
            @error('prodi')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="no_telp">Nomor Telepon / WhatsApp <span style="color: #e74c3c;">*</span></label>
            <input type="text" 
                   id="no_telp" 
                   name="no_telp" 
                   value="{{ old('no_telp') }}" 
                   class="{{ $errors->has('no_telp') ? 'is-invalid' : '' }}" 
                   placeholder="Contoh: 081234567890" 
                   required>
            @error('no_telp')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="alamat">Alamat Tinggal <span style="color: #e74c3c;">*</span></label>
            <textarea id="alamat" 
                      name="alamat" 
                      rows="4" 
                      class="{{ $errors->has('alamat') ? 'is-invalid' : '' }}" 
                      placeholder="Masukkan alamat lengkap" 
                      required>{{ old('alamat') }}</textarea>
            @error('alamat')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-actions" style="margin-top: 2rem;">
            <button type="submit" class="btn btn-primary" style="padding: 10px 24px; font-size: 1rem;">
                Simpan Data
            </button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary" style="padding: 10px 24px; font-size: 1rem;">
                Kembali
            </a>
        </div>
    </form>
</div>
@endsection
