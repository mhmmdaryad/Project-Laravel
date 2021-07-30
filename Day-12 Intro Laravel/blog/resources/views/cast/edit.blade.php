@extends('halaman.master')

@section('title')
Edit Cast id {{$casts->id}}
@endsection

@section('content')
<form action="/cast/{{$casts->id}}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" class="form-control" value="{{$casts->nama}}" name="name" id="name" placeholder="Masukkan Nama">
        @error('name')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="age">Umur</label>
        <input type="number" class="form-control" value="{{$casts->umur}}" name="age" id="age" maxlength="2" placeholder="Masukkan Umur">
        @error('age')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="bio">Bio</label>
        <input type="text" class="form-control" value="{{$casts->bio}}" name="bio" id="bio" placeholder="Masukkan Bio">
        @error('bio')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection