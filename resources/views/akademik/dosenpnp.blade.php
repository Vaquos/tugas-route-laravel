@extends('layouts/main')
@section('title')
Daftar Dosen PNP
@endsection

@section('content')
<ul>
    @forelse ($dsn as $namaDosen)
    <li>{{$namaDosen}}</li>
    @empty
    <div class="alert alert-warning d-inline-block">
        Data Dosen tidak ada. Silahkan isi array data dosen!
    </div>
    @endforelse
</ul>
@endsection