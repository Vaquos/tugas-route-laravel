<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TeknisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teknisis = DB::table('teknisis')->get();
        return view('teknisis.index', compact('teknisis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teknisis.create',); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nik' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'nohp' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'bidang' => 'required|string|max:255',
        ]);

        DB::table('teknisis')->insert([
            'name'  => $request->name,
            'nik'  => $request->nik,
            'email'  => $request->email,
            'nohp'  => $request->nohp,
            'alamat'  => $request->alamat,
            'bidang'  => $request->bidang,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return redirect()->route('teknisi.index')->with('success', 'Data Teknisi Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "menampilkan user dengan id" . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teknisi = DB::table('teknisis')->find($id);
        return view('teknisis.edit', compact('teknisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nik' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'nohp' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'bidang' => 'required|string|max:255',
        ]);

        DB::table('teknisis')->where('id', $id)->update([
            'name'  => $request->name,
            'nik'  => $request->nik,
            'email'  => $request->email,
            'nohp'  => $request->nohp,
            'alamat'  => $request->alamat,
            'bidang'  => $request->bidang,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return redirect()->route('teknisi.index')->with('success', 'Data Teknisi Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('teknisis')->where('id', $id)->delete();
        return redirect()->route('teknisi.index')->with('success', 'Data Teknisi Berhasil dihapus');
    }
}
