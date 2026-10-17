@extends('layouts.main')

@section('title', 'home')

@section('content')

<div class="welcome-section">
    <h2>Raih Peringkat Pencarian Teratas dengan Layanan SEO Kami</h2>
    
    <p>
    Solusi teknologi informasi untuk mendukung transformasi digital dan kebutuhan bisnis modern.
    </p>

    <div style="margin-top: 20px;">
        <a href="{{ url('/profile') }}" class="btn-primary" style="text-decoration: none;">
        Lihat Profile
        </a>
    </div>
</div>

<div class="guide-section">
    <h2 style="text-align: center; border-bottom: none;">Layanan Unggulan Kami</h2>
    <div class="guide-cards">
        <div class="guide-card">
            <h4>Optimasi SEO</h4>
            <p>On-Page & Off-Page</p>
        </div>
        <div class="guide-card">
            <h4>Pembuatan Website</h4>
            <p>Company Profile & E-Commerce</p>
        </div>
        <div class="guide-card">
            <h4>Sosial Media</h4>
            <p>Manajemen & Content Creation</p>
        </div>
        <div class="guide-card">
            <h4>Konsultasi</h4>
            <p>IT & Solusi Bisnis</p>
        </div>
    </div>
</div>

<div class="daftar-section">
    <h2>Tertarik Bekerja Sama?</h2>
    <p style="margin-bottom: 20px;">Hubungi kami sekarang untuk mendapatkan penawaran terbaik dan konsultasi gratis.</p>
    <a href="{{ url('/contact') }}" class="btn-primary" style="text-decoration: none;">Hubungi Kami</a>
</div>
@endsection