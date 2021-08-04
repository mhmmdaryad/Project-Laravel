@extends('halaman.master')

@section('title')
List Film
@endsection

@section('content')
<a href="/film/create" class="btn btn-primary">Tambah</a>
<div class="row">
    @foreach ($film as $item)
    <div class="col-4">

        <div class="card" style="width: 18rem;">
            <img src="{{asset('uploads/film/'.$item->poster)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$item->judul}} ({{$item->tahun}})</h5>
                <p class="card-text">{{Illuminate\Support\Str::limit($item->ringkasan,200)}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection