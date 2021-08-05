@extends('halaman.master')

@section('title')
Detail Film
@endsection

@section('content')

<div class="row">
 
    <div class="col-3">
    <img src="{{asset('uploads/film/'.$film->poster)}}" class="card-img-top" alt="...">
    </div>
    <div class='col-9'>
        <h3>{{$film->judul}} ({{$film->tahun}})</h3>
        <p>{{$film->ringkasan}}</p>
        <a href="/film" class="btn btn-primary btn-sm">Kembali</a>
    </div>

</div>
@endsection