@extends('layouts.main')
@section('title')
    Daftar Dosen
@endsection
@section('content')
    <h1>Data Dosen</h1>
    <a href="{{ route('dosens.create') }}">Tambah Dosen</a>
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
                <th>Keahlian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($dosens as $lecturer)
                <tr>
                    <td>{{ $lecturer->name }}</td>
                    <td>{{ $lecturer->nik }}</td>
                    <td>{{ $lecturer->email }}</td>
                    <td>{{ $lecturer->nohp }}</td>
                    <td>{{ $lecturer->alamat }}</td>
                    <td>{{ $lecturer->keahlian }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('dosens.edit', $lecturer->id) }}">Edit</a>
                        <form action="{{ route('dosens.destroy', $lecturer->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination-container">
        {{ $dosens->links() }}
    </div>
@endsection
