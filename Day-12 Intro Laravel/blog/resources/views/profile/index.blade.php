@extends('halaman.master')

@section('title')
User Id {{Auth::user()->id}}
@endsection

@section('content')

@if ($profile!=null)
<h5>Nama = {{$profile->user->username}}</h5>
<form action="/profile/{{$profile->id}}" method="POST"  enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="umur">Umur</label>
        <input type="number" class="form-control" value="{{$profile->umur}}" name="umur" id="umur" maxlength="2" placeholder="Masukkan Umur">
        @error('umur')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="bio">Bio</label>
        <input type="text" class="form-control" value="{{$profile->bio}}" name="bio" id="bio" placeholder="Masukkan Bio">
        @error('bio')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat">{{$profile->alamat}}</textarea>
        @error('alamat')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>
@else
<form action="/profile" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="form-group">
        <label for="umur">Umur</label>
        <input type="number" class="form-control" name="umur" id="umur" maxlength="2" placeholder="Masukkan Umur">
        @error('umur')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="bio">Bio</label>
        <input type="text" class="form-control" name="bio" id="bio" placeholder="Masukkan Bio">
        @error('bio')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat"></textarea>
        @error('alamat')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
@endif
@endsection