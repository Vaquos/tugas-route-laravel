@extends('layouts.main')
@section('title')
    Daftar Teknisi
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card my-5">
                <div class="card-body">
                    <h1 class="text-center">Tambah Teknisi</h1>
                    <form action="{{ route('teknisi.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label">Nama:</label>
                            <input class="form-control" type="text" name="name" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">nik:</label>
                            <input class="form-control" type="text" name="nik" required>
                            @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Email:</label>
                            <input class="form-control" type="email" name="email" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Nohp:</label>
                            <input class="form-control" type="text" name="nohp">
                            @error('nohp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Alamat:</label>
                            <input class="form-control" type="text" name="alamat">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="form-group mb-3">
                            <label class="form-label">Bidang:</label>
                            <input class="form-control" type="text" name="bidang" required>
                            @error('bidang')
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
