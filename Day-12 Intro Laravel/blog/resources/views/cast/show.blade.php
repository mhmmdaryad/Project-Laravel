@extends('halaman.master')

@section('title')
Detail Cast id {{$casts->id}}
@endsection

@section('content')
<h1>Nama : {{$casts->nama}}</h1>
<h1>Umur : {{$casts->umur}}</h1>
<h1>Bio : {{$casts->bio}}</h1>
@endsection