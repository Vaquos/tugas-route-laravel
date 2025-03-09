<x-layout>
    <x-slot:title>Mahasiswa</x-slot:title>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        @foreach ($data as $mahasiswa)
        <li>
            {{$mahasiswa->nama}} ({{$mahasiswa->nim}}) - {{$mahasiswa->jurusan}}
        </li>
        @endforeach
    </ul>
</x-layout>