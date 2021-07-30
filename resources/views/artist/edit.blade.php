@extends('layouts.app') 

@section('content') 
<div class="container">
<h3>Edit Data Artist</h3> 
    <form action="{{ url('/artist/' . $row->artist_id) }}" method="POST"> 
        <input name="_method" type="hidden" value="PATCH"> 

        @csrf 
        <table>
    
            <div class="form-group">
            <lable for="">Nama Artist</lable> 
            <input type="text" name="artist_name" class="form-control" value="{{ $row->artist_name }}">
            </div>

            <div class="form-group">
            <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>
    </form> 
</div> 
@endsection