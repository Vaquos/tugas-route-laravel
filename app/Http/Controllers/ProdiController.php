<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis = DB::table('prodis')->get();
        return view('prodis.index', compact('prodis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prodis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255|unique:prodis,name'
        ]);

        DB::table('prodis')->insert([
            'name'  => $request->name
        ]);

        return redirect()->route('prodi.index')->with('success', 'Data Prodi Berhasil Ditambahkan');
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
        $prodi = DB::table('prodis')->find($id);
        return view('prodis.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'  => 'required|string|max:255|unique:prodis,name'
        ]);

        DB::table('prodis')->where('id', $id)->update([
            'name'  => $request->name
        ]);

        return redirect()->route('prodi.index')->with('success', 'Data Prodi Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
