@extends('layouts.app')


@section('content')

<div class="container"> 
<h3>Daftar Nama played
<a href="{{ url('/played/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
</h3> 
<table class="table table-bordered"> 
    <tr> 
    <th>No</th>
    <th>Nama Artist</th>
    <th>Nama Album</th>
    <th>Nama Track</th>

    <th>EDIT</th> 
    <th>DELETE</th> 
    </tr> 
@foreach($rows as $row) 
    <tr> 
    <td>{{ $row->played_id }}</td>
    <td>{{ $row->artist_name }}</td> 
    <td>{{ $row->album_name }}</td> 
    <td>{{ $row->track_name }}</td> 

    <td><a href="{{ url('played/' . $row->played_id . '/edit') }}" class="btn btn-primary btn-sm ">Edit</a</td> 
    <td>
        <form action="{{ url('/played/' . $row->played_id) }}" method="POST">
        <input name="_method" type="hidden" value="DELETE">

        @csrf 
        <button class="btn btn-danger btn-sm">Delete</button> 
        </form>
    </td> 

    </tr> 
@endforeach 
</table> 
</div>

@endsection