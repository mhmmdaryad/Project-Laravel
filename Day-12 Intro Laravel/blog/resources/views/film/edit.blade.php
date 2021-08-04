@extends('halaman.master')

@section('title')
Edit Film
@endsection

@section('content')
<form action="/film/{{$film->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" value="{{$film->judul}}" name="judul" id="judul" placeholder="Masukkan Judul">
        @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="ringkasan">Ringkasan</label>
        <textarea class="form-control" name="ringkasan" id="ringkasan" placeholder="Masukkan Ringkasan">{{$film->ringkasan}}</textarea>
        @error('ringkasan')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="tahun">Tahun</label>
        <input type="number" class="form-control" value="{{$film->tahun}}" name="tahun" id="tahun" maxlength="4" placeholder="Masukkan Umur">
        @error('tahun')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="genre_id">Genre</label>
        <select class="custom-select" name="genre_id" id="genre_id">
            <option value="">--Silahkan Pilih Genre--</option>
            @foreach($genre as $item)
                @if($item->id===$film->genre_id)
                <option value="{{$item->id}}" selected>{{$item->nama}}</option>
                @elses
                <option value="{{$item->id}}">{{$item->nama}}</option>
                @endif
            @endforeach
        </select>
        @error('genre_id')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="poster">Poster</label>
        <input type="file" class="form-control" name="poster" id="poster" placeholder="Masukkan Poster">
        @error('poster')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection