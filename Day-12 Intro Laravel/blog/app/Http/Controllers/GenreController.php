<?php

namespace App\Http\Controllers;

use DB;
use App\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genre = Genre::all();
        return view('genre.index', compact('genre'));
    }
    public function create()
    {
        $genre = Genre::all();
        return view('genre.create', compact('genre'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $query = DB::table('genre')->insert([
            "nama" => $request["name"],
        ]);
        return redirect('/genre/create');
    }

    public function show($id)
    {
        $genre = FacadesDB::table('genre')->where('id', $id)->first();
        return view('genre.show', compact('genre'));
    }

    public function edit($id)
    {
        // $genre = Genre::table('genre')->where('id', $id)->first();
        // return view('genre.edit', compact('genre'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required',
        // ]);
        // $query = Genre::table('genre')->where('id', $id)->update([
        //     "nama" => $request["name"],
        // ]);
        // return redirect('/genre');
    }

    public function destroy($id)
    {
        // $query = Genre::table('genre')->where('id', $id)->delete();
        // return redirect('/genre');
    }
}
