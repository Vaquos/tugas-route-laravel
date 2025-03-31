@extends('layouts.main')
@section('title')
    Daftar Prodi
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card my-5">
                <div class="card-body">
                    <h1 class="text-center">Tambah Prodi</h1>
                    <form action="{{ route('prodi.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label">Nama Prodi:</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                                required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
