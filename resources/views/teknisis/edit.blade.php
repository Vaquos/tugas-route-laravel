@extends('layouts.main')
@section('title')
    Edit Teknisi
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card my-5">
                <div class="card-body">
                    <h1 class="text-center">Edit Data Teknisi</h1>
                    @if (session('error'))
                        <p style="color: red;">{{ session('error') }}</p>
                    @endif

                    <form action="{{ route('teknisi.update', $teknisi->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label class="form-label" for="nama">Nama:</label>
                            <input class="form-control" type="text" id="nama" name="name"
                                value="{{ $teknisi->name }}" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="nik">Nik:</label>
                            <input class="form-control" type="text" id="nik" name="nik"
                                value="{{ $teknisi->nik }}" required>
                            @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="email">Email:</label>
                            <input class="form-control" type="email" id="email" name="email"
                                value="{{ $teknisi->email }}" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="nohp">No Hp:</label>
                            <input class="form-control" type="text" id="nohp" name="nohp"
                                value="{{ $teknisi->nohp }}">
                            @error('nohp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="alamat">Alamat:</label>
                            <input class="form-control" type="text" id="alamat" name="alamat"
                                value="{{ $teknisi->alamat }}">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="bidang">Bidang:</label>
                            <input class="form-control" type="text" id="bidang" name="bidang"
                                value="{{ $teknisi->bidang }}" required>
                            @error('bidang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                    </form>
                    <a href="{{ route('teknisis.index') }}">Kembali ke Daftar Teknisi</a>
                </div>
            </div>
        </div>
    </div>
@endsection
