@extends('layouts.main')

@section('title', 'profile')

@section('content')

<div class="hero">
    <h1>Profil</h1>

    <h2>
        PT Teknologi Nusantara
    </h2>

    <p>
    Solusi teknologi informasi untuk mendukung
    transformasi digital dan kebutuhan bisnis modern.
    </p>

    <a href="{{ url('/profile') }}" class="button">
    Lihat Profile
    </a>
</div>
@endsection