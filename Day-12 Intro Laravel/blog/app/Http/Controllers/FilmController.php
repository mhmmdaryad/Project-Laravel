<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Film;
use App\cast;
use App\Genre;
use DB;
use File;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    public function index()
    {
        $film = Film::all();
        return view('film.index', compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $casts = DB::table('cast')->get();
        $genre = Genre::all();

        return view('film.create', compact('genre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'genre_id' => 'required',
            'poster' => 'required|mimes:jpeg,jpg,png|max:2200',
        ]);

        $poster = $request->poster;
        $new_poster = time() . ' - ' . $poster->getClientOriginalName();

        $query = DB::table('film')->insert([
            'judul' => $request->judul,
            'ringkasan' => $request->ringkasan,
            'tahun' => $request->tahun,
            'genre_id' => $request->genre_id,
            'poster' => $new_poster,
        ]);
        $poster->move('uploads/film/', $new_poster);
        return redirect('/film');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::findorfail($id);
       
        return view('film.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = Film::findorfail($id);
        $genre= Genre::all();
        return view('film.edit',compact('genre','film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'genre_id' => 'required',
            'poster' => 'mimes:jpeg,jpg,png|max:2200',
        ]);

        $film = Film::findorfail($id);

        if ($request->has('poster')){
            $path="uploads/film";
            File::delete($path.$film->poster);
            $poster=$request->poster;
            $new_poster = time() . ' - ' . $poster->getClientOriginalName();
            $poster->move('uploads/film/', $new_poster);
            $film_data= [
            'judul' => $request->judul,
            'ringkasan' => $request->ringkasan,
            'tahun' => $request->tahun,
            'genre_id' => $request->genre_id,
            'poster' => $new_poster,
            ];
        }else{
            $film_data= [
                'judul' => $request->judul,
                'ringkasan' => $request->ringkasan,
                'tahun' => $request->tahun,
                'genre_id' => $request->genre_id,
            ];
        }
        $film->update($film_data);
        return redirect('/film/create'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film= Film::findorfail($id);
        $film->delete();

        $path = "uploads/film/";
        File::delete($path.$film->poster);

        return redirect()->route('film.index');
    }
}
