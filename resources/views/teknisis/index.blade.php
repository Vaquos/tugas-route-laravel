@extends('layouts.main')
@section('title')
    Daftar Teknisi
@endsection
@section('content')
    <h1>Data Teknisi</h1>
    <a href="{{ route('teknisi.create') }}">Tambah Teknisi</a>
    @if (session('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    <table class="table table-bordered table-striped mt-3 border-1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nik</th>
                <th>Email</th>
                <th>Nohp</th>
                <th>Alamat</th>
                <th>Bidang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($teknisis as $teknisi)
                <tr>
                    <td>{{ $teknisi->name }}</td>
                    <td>{{ $teknisi->nik }}</td>
                    <td>{{ $teknisi->email }}</td>
                    <td>{{ $teknisi->nohp }}</td>
                    <td>{{ $teknisi->alamat }}</td>
                    <td>{{ $teknisi->bidang }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('teknisi.edit', $teknisi->id) }}">Edit</a>
                        <form action="{{ route('teknisi.destroy', $teknisi->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
