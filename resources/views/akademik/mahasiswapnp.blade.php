@extends('layouts/main')
@section('title')
Daftar Mahasiswa PNP
@endsection

@section('content')
<h1>Mahasiswa PNP</h1>

<ul>
    @foreach ($mhs as $namaMhs)
    <li>{{$namaMhs}}</li>
    @endforeach
</ul>
@endsection