<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function delete()
    {
        $dosen = Dosen::find(5);
        $dosen->delete();
        dd($dosen);
    }
    public function destroy()
    {
        $dosen = Dosen::destroy(8);
        dd($dosen);
    }


    public function massDelete()
    {
        $dosen = Dosen::where('keahlian', 'Data Analyst')->delete();
        dd($dosen);
    }
    public function all()
    {
        $dosen = Dosen::all();
        foreach ($dosen as $itemDosen) {
            echo $itemDosen->id . '<br>';
            echo $itemDosen->nama . '<br>';
            echo $itemDosen->nik . '<br>';
            echo $itemDosen->email . '<br>';
            echo $itemDosen->nohp . '<br>';
            echo $itemDosen->alamat;
            echo '<hr>';
            //dd ($itemDosen);
        }
    }
    public function allView()
    {
        $dosen = Dosen::all();
        return view('akademik.dosen', ['dsn' => $dosen]);
    }


    public function getWhere()
    {


        $dosen = Dosen::where('keahlian', 'Web Programming')
            ->orderBy('nama', 'asc')
            ->get();
        return view('akademik.dosen', ['dsn' => $dosen]);
    }
    public function testWhere()
    {


        $dosen = Dosen::where('keahlian', 'Web Programming')
            ->orderBy('nik', 'asc')
            ->get();
        return view('akademik.dosen', ['dsn' => $dosen]);
    }
    public function first()
    {


        $dosen = Dosen::where('keahlian', 'Web Programming')->first();
        return view('akademik.dosen1', ['dsn' => $dosen]);
    }
    public function find()
    {


        $dosen = Dosen::find(15);
        return view('akademik.dosen1', ['dsn' => $dosen]);
    }
    public function latest()
    {


        $dosen = Dosen::latest()->get();
        return view('akademik.dosen', ['dsn' => $dosen]);
    }
    public function limit()
    {


        $dosen = Dosen::latest()->limit(2)->get();
        return view('akademik.dosen', ['dsn' => $dosen]);
    }
    public function skipTake()
    {


        $dosen = Dosen::orderBy("id")->skip(1)->take(4)->get();
        return view('akademik.dosen', ['dsn' => $dosen]);
    }

    public function softDelete()
    {
        Dosen::where('id', 3)->delete();
        return 'Data Berhasil Dihapus';
    }

    public function withTrashed()
    {
        $dosen = Dosen::withTrashed()->get();
        return view('akademik.dosen', ['dsn' => $dosen]);
    }

    public function restore()
    {
        Dosen::withTrashed()->where('id', 3)->restore();
        return 'Data Berhasil Dikembalikan';
    }

    public function forceDelete()
    {
        Dosen::where('id', 3)->forceDelete();
        return 'Data Berhasil Dihapus secara permanen';
    }
}
