@extends('layouts.main')
@section('title')
    Daftar Mahasiswa
@endsection
@section('content')
    <h1>Data Mahasiswa</h1>
    <a href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>
    @if (session('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    <table class="table table-bordered table-striped mt-3 border-1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>No BP</th>
                <th>Jurusan</th>
                <th>Prodi</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->name }}</td>
                    <td>{{ $mahasiswa->nobp }}</td>
                    <td>{{ $mahasiswa->jurusan }}</td>
                    <td>{{ $mahasiswa->prodi }}</td>
                    <td>{{ date('d-M-Y', strtotime($mahasiswa->tgllahir)) }}</td>
                    <td>{{ $mahasiswa->email }}</td>
                    <td>{{ $mahasiswa->nohp }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('mahasiswa.edit', $mahasiswa->id) }}">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
