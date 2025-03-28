@extends('layouts.main')
@section('title')
    Edit Dosen
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card my-5">
                <div class="card-body">
                    <h1 class="text-center">Edit Data Dosen</h1>
                    @if (session('error'))
                        <p style="color: red;">{{ session('error') }}</p>
                    @endif

                    <form action="{{ route('dosens.update', $dosen->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label class="form-label" for="nama">Nama:</label>
                            <input class="form-control" type="text" id="nama" name="name"
                                value="{{ $dosen->name }}" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="nik">Nik:</label>
                            <input class="form-control" type="text" id="nik" name="nik"
                                value="{{ $dosen->nik }}" required>
                            @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="email">Email:</label>
                            <input class="form-control" type="email" id="email" name="email"
                                value="{{ $dosen->email }}" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="nohp">No Hp:</label>
                            <input class="form-control" type="text" id="nohp" name="nohp"
                                value="{{ $dosen->nohp }}">
                            @error('nohp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="alamat">Alamat:</label>
                            <input class="form-control" type="text" id="alamat" name="alamat"
                                value="{{ $dosen->alamat }}">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="keahlian">Keahlian:</label>
                            <input class="form-control" type="text" id="keahlian" name="keahlian"
                                value="{{ $dosen->keahlian }}" required>
                            @error('keahlian')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                    </form>
                    <a href="{{ route('dosens.index') }}">Kembali ke Daftar Dosen</a>
                </div>
            </div>
        </div>
    </div>
@endsection
