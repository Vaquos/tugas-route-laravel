@extends('layouts.main')
@section('title')
    Daftar Mahasiswa
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6 col-12">
            <div class="card my-5">
                <div class="card-body">
                    <h1 class="text-center">Tambah Mahasiswa</h1>
                    <form action="{{ route('mahasiswa.store') }}" class="needs-validation" method="POST" novalidate>
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label">Nama:</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                                required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">No BP:</label>
                            <input class="form-control @error('nobp') is-invalid @enderror" type="text" name="nobp"
                                required>
                            @error('nobp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Jurusan:</label>
                            <input class="form-control @error('jurusan') is-invalid @enderror" type="text" name="jurusan"
                                required>
                            @error('jurusan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Prodi:</label>
                            <input class="form-control @error('prodi') is-invalid @enderror" type="text" name="prodi"
                                required>
                            @error('prodi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Tanggal Lahir:</label>
                            <input class="form-control @error('tgllahir') is-invalid @enderror" type="date"
                                name="tgllahir" required>
                            @error('tgllahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Email:</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                                required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Nohp:</label>
                            <input class="form-control @error('nohp') is-invalid @enderror" type="text" name="nohp">
                            @error('nohp')
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
