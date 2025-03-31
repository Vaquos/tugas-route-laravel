<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function insertSql()
    {
        $query = DB::insert(
            'INSERT INTO mahasiswas (name, nobp, jurusan, prodi, tglahir, email, nohp, created_at, updated_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), NOW())',
            ['Furqon', '1213', 'Teknologi Informasi', 'TRPL', '2004-07-16', 'furqon@gmail.com', '085183200450']
        );

        return "berhasil insert mahasiswa";
    }


    public function insertPrepared()
    {
        $query = DB::insert(
            'INSERT INTO mahasiswas (name, nobp, jurusan, prodi, tglahir, email, nohp, created_at, updated_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), NOW())',
            ['August', '1009', 'Teknologi Informasi', 'MI', '2005-02-12', 'august@gmail.com', '085183200452']
        );

        return "berhasil insert prepared mahasiswa";
    }


    public function insertBinding()
    {
        $query = DB::insert(
            'INSERT INTO mahasiswas (name, nobp, jurusan, prodi, tglahir, email, nohp, created_at, updated_at) 
            VALUES (:name, :nobp, :jurusan, :prodi, :tglahir, :email, :nohp, :created_at, :updated_at)',
            [
                'name'       => 'Seventeenth',
                'nobp'       => '1230',
                'jurusan'    => 'Teknologi Informasi',
                'prodi'      => 'ANIMASI',
                'tglahir'    => '2001-01-11',
                'email'      => 'furqonaugust@gmail.com',
                'nohp'       => '085183200453',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        return "Berhasil insert binding mahasiswa";
    }



    // public function update()
    // {
    //     $query = DB::update(
    //         "UPDATE mahasiswas SET jurusan = 'KESEHATAN MASYARAKAT' where name=?",
    //         ['Furqon']
    //     );
    //     return "Berhasil UPDATE mahasiswa";
    // }

    public function select()
    {
        $query = DB::select(
            "SELECT * FROM mahasiswas WHERE name=?",
            ['Furqon']
        );
        return "Berhasil SELECT mahasiswa";
    }

    public function selectView()
    {
        $query = DB::select(
            "SELECT * FROM mahasiswas"
        );
        return view("akademik.mahasiswapnp", ["mhs" => $query]);
    }

    public function selectwhere()
    {
        $query = DB::select(
            "SELECT * FROM mahasiswas WHERE prodi=? ORDER BY nobp ASC",
            ['Furqon']
        );
        return view("akademik.mahasiswapnp", ["mhs" => $query]);
    }

    public function statement()
    {
        $query = DB::delete("TRUNCATE mahasiswas");
        return "berhasil menghapus table mahasiswa";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        DB::Listen(function ($query) {
            logger("Query: " . $query->sql . " |binding" . implode(", ", $query->bindings));
        });

        // mengambil data mahasiswa
        $mahasiswas = Mahasiswa::all();
        // dd($data);

        return view("mahasiswa.index", compact("mahasiswas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("mahasiswa.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nobp' => 'required|numeric',
            'jurusan'=> 'required|string|max:255',
            'prodi'=> 'required|string|max:255',
            'tgllahir'=> 'required|date',
            'email'=> 'required|email',
            'nohp'=> 'required|string|max:255',
        ]);

        DB::table('mahasiswas')->insert([
            'name' => $request->name,
            'nobp' => $request->nobp,
            'jurusan'=> $request->jurusan,
            'prodi'=> $request->prodi,
            'tgllahir'=> $request->tgllahir,
            'email'=> $request->email,
            'nohp'=> $request->nohp,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa Berhasil Ditambahkan');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = DB::table('mahasiswas')->find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id){
        $request->validate([
            'name' => 'required|string|max:255',
            'nobp' => 'required|numeric',
            'jurusan'=> 'required|string|max:255',
            'prodi'=> 'required|string|max:255',
            'tgllahir'=> 'required|date',
            'email'=> 'required|email',
            'nohp'=> 'required|string|max:255',
        ]);

        DB::table('mahasiswas')->where('id', $id)->update([
            'name' => $request->name,
            'nobp' => $request->nobp,
            'jurusan'=> $request->jurusan,
            'prodi'=> $request->prodi,
            'tgllahir'=> $request->tgllahir,
            'email'=> $request->email,
            'nohp'=> $request->nohp,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa Berhasil Diupdate');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('mahasiswas')->where('id', $id)->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa Berhasil dihapus');
    }
}
