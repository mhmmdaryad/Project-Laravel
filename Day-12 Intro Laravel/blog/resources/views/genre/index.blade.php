@extends('halaman.master')

@section('title')
List Genre
@endsection

@section('content')
<a href="/genre/create" class="btn btn-primary">Tambah</a>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($genre as $key=>$value)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$value->nama}}</td>
            <td>
                <form action="/genre/{{$value->id}}" method="POST">
                    <a href="/genre/{{$value->id}}" class="btn btn-info">Show</a>
                    <a href="/genre/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" value="Delete">
                </form>
            </td>
        </tr>
        @empty
        <tr colspan="3">
            <td>No data</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection