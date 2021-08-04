<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\cast;

class CastController extends Controller
{
    public function index()
    {
        $casts = cast::all();
        // $casts = DB::table('cast')->get();
        return view('cast.index', compact('casts'));
    }
    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'bio' => 'required',
        ]);
        $query = DB::table('cast')->insert([
            "nama" => $request["name"],
            "umur" => $request["age"],
            "bio" => $request["bio"]
        ]);
        return redirect('/cast/create');
    }

    public function show($id)
    {
        $casts = DB::table('cast')->where('id', $id)->first();
        return view('cast.show', compact('casts'));
    }

    public function edit($id)
    {
        $casts = DB::table('cast')->where('id', $id)->first();
        return view('cast.edit', compact('casts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'bio' => 'required',
        ]);
        $query = DB::table('cast')->where('id', $id)->update([
            "nama" => $request["name"],
            "umur" => $request["age"],
            "bio" => $request["bio"]
        ]);
        return redirect('/cast');
    }

    public function destroy($id)
    {
        $query = DB::table('cast')->where('id', $id)->delete();
        return redirect('/cast');
    }
}
