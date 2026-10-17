@extends('layouts.main')

@section('title', 'news')

@section('content')

<div class="welcome-section">
    <h2>Berita Terbaru</h2>
    <p>Update informasi seputar PT Teknologi Nusantara dan perkembangan teknologi saat ini.</p>
</div>

<div class="guide-section">
    <div class="guide-cards">
        <div class="guide-card">
            <div class="step-number" style="font-size: 0.8rem; border-radius: 5px; width: auto; padding: 0 10px;">12 Okt</div>
            <h4>Transformasi Digital 2026</h4>
            <p style="margin-bottom: 15px;">Solusi teknologi informasi untuk mendukung transformasi digital dan kebutuhan bisnis modern mulai diterapkan di berbagai sektor.</p>
            <a href="#" style="color: #39BCC8; text-decoration: none; font-weight: bold;">Baca selengkapnya &rarr;</a>
        </div>
        <div class="guide-card">
            <div class="step-number" style="font-size: 0.8rem; border-radius: 5px; width: auto; padding: 0 10px;">05 Okt</div>
            <h4>Peluncuran Layanan Cloud</h4>
            <p style="margin-bottom: 15px;">Infrastruktur cloud terbaru untuk skalabilitas bisnis yang lebih efisien dan aman telah resmi kami luncurkan.</p>
            <a href="#" style="color: #39BCC8; text-decoration: none; font-weight: bold;">Baca selengkapnya &rarr;</a>
        </div>
    </div>
</div>
@endsection