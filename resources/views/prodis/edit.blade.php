@extends('layouts.main')
@section('title')
    Edit Prodi
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card my-5">
                <div class="card-body">
                    <h1 class="text-center">Edit Data Prodi</h1>
                    @if (session('error'))
                        <p style="color: red;">{{ session('error') }}</p>
                    @endif

                    <form action="{{ route('prodi.update', $prodi->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label class="form-label" for="nama">Nama Prodi:</label>
                            <input class="form-control" type="text" id="nama" name="name"
                                value="{{ $prodi->name }}" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                    </form>
                    <a href="{{ route('prodis.index') }}">Kembali ke Daftar Prodi</a>
                </div>
            </div>
        </div>
    </div>
@endsection
