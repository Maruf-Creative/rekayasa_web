@extends('layouts.main')
@section('title', 'Edit Data Mahasiswa')

@section('content')
<div class="form-container" style="max-width: 750px; margin: 0 auto;">
    <div style="margin-bottom: 1.5rem; border-bottom: 2px solid #eee; padding-bottom: 1rem;">
        <h2 style="color: #39BCC8; margin-bottom: 0.3rem;">Edit Data Mahasiswa</h2>
        <p style="color: #64748b; font-size: 0.95rem;">Perbarui data untuk mahasiswa: <strong>{{ $mahasiswa->nama }} ({{ $mahasiswa->nim }})</strong></p>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <div>
                <strong>Perhatian!</strong> Terdapat kesalahan pengisian data:
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nim">Nomor Induk Mahasiswa (NIM) <span style="color: #e74c3c;">*</span></label>
            <input type="text" 
                   id="nim" 
                   name="nim" 
                   value="{{ old('nim', $mahasiswa->nim) }}" 
                   class="{{ $errors->has('nim') ? 'is-invalid' : '' }}" 
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
                   value="{{ old('nama', $mahasiswa->nama) }}" 
                   class="{{ $errors->has('nama') ? 'is-invalid' : '' }}" 
                   required>
            @error('nama')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="jk">Jenis Kelamin <span style="color: #e74c3c;">*</span></label>
            <select id="jk" name="jk" class="{{ $errors->has('jk') ? 'is-invalid' : '' }}" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="L" {{ old('jk', $mahasiswa->jk) == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                <option value="P" {{ old('jk', $mahasiswa->jk) == 'P' ? 'selected' : '' }}>Perempuan</option>
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
                   value="{{ old('prodi', $mahasiswa->prodi) }}" 
                   class="{{ $errors->has('prodi') ? 'is-invalid' : '' }}" 
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
                   value="{{ old('no_telp', $mahasiswa->no_telp) }}" 
                   class="{{ $errors->has('no_telp') ? 'is-invalid' : '' }}" 
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
                      required>{{ old('alamat', $mahasiswa->alamat) }}</textarea>
            @error('alamat')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-actions" style="margin-top: 2rem;">
            <button type="submit" class="btn btn-primary" style="padding: 10px 24px; font-size: 1rem;">
                Perbarui Data
            </button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary" style="padding: 10px 24px; font-size: 1rem;">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection