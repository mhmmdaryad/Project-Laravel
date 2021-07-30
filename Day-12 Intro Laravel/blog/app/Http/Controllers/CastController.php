<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CastController extends Controller
{
    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:cast',
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
}
