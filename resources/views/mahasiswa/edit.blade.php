@extends('layouts.main')
@section('title')
    Edit Mahasiswa
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6 col-12">
            <div class="card my-5">
                <div class="card-body">
                    <h1 class="text-center">Edit Data Mahasiswa</h1>
                    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label class="form-label">Nama:</label>
                            <input class="form-control" type="text" name="name" value="{{ $mahasiswa->name }}"
                                required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">No BP:</label>
                            <input class="form-control" type="text" name="nobp" value="{{ $mahasiswa->nobp }}"
                                required>
                            @error('nobp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Jurusan:</label>
                            <input class="form-control" type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}"
                                required>
                            @error('jurusan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Prodi:</label>
                            <input class="form-control" type="text" name="prodi" value="{{ $mahasiswa->prodi }}"
                                required>
                            @error('prodi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Tanggal Lahir:</label>
                            <input class="form-control" type="date" name="tgllahir" value="{{ $mahasiswa->tgllahir }}"
                                required>
                            @error('tgllahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Email:</label>
                            <input class="form-control" type="email" name="email" value="{{ $mahasiswa->email }}"
                                required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Nohp:</label>
                            <input class="form-control" type="text" name="nohp"value="{{ $mahasiswa->nohp }}">
                            @error('nohp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    <a href="{{ route('mahasiswas.index') }}">Kembali ke Daftar Mahasiswa</a>
                </div>
            </div>
        </div>
    </div>
@endsection
