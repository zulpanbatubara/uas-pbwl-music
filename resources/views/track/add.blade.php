@extends('layouts.app') 

@section('content') 

<div class="container"> 

<h3>Tambah Data Track</h3> 
<form action="{{ url('/track') }}" method="POST">
 
@csrf 
<table>
    
    <div class="form-group">
    <lable for="">Nama track</lable> 
    <input type="text" name="track_name" class="form-control">
    </div>

    <div class="form-group">
    <lable for="">Nama Artist</lable> 
    <input type="text" name="artist_name" class="form-control">
    </div>

    <div class="form-group">
    <lable for="">Nama Album</lable> 
    <input type="text" name="album_name" class="form-control">
    </div>

    <div class="form-group">
    <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
   
</table> 
</form> 
</div> 
@endsection