@extends('layouts.main')
@section('title', 'Data Mahasiswa')
@section('content')
<div>
    <table>
        <thead>
            <tr>NIM</tr>
            <tr>Nama</tr>
            <tr>Jenis Kelamin</tr>
            <tr>Prodi</tr>
            <tr>No. Telpon</tr>
            <tr>Alamat</tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->nim}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->jk}}</td>
                <td>{{$item->prodi}}</td>
                <td>{{$item->alamat}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection