@extends('layouts.main')
@section('title')
    Daftar Prodi
@endsection
@section('content')
    <h1>Data Prodi</h1>
    <a href="{{ route('prodi.create') }}">Tambah Prodi</a>
    @if (session('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    <table class="table table-bordered table-striped mt-3 border-1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($prodis as $prodi)
                <tr>
                    <td>{{ $prodi->name }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('prodi.edit', $prodi->id) }}">Edit</a>
                        <form action="{{ route('prodi.destroy', $prodi->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
