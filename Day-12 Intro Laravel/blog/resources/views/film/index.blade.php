@extends('halaman.master')

@section('title')
List Film
@endsection

@section('content')

@auth
<a href="/film/create" class="btn btn-primary mb-2">Tambah</a>
@endauth

<div class="row">
    @foreach ($film as $item)
    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="{{asset('uploads/film/'.$item->poster)}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h4>{{$item->judul}} ({{$item->tahun}})</h4>
            <p class="card-text">{{Illuminate\Support\Str::limit($item->ringkasan,200)}}</p>
                <form action="/film/{{$item->id}}" method="POST">
                    <a href="/film/{{$item->id}}" class="btn btn-info">Show</a>
                    @auth
                    <a href="/film/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" value="Delete">
                    @endauth
                 </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection