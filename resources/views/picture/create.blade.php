@extends('layouts.app')
@section('title','Index Page')
@section('content')
    <form method="Post" action="{{route('save')}}" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Image</label>
        <input type="file" name="photos" value="{{old ('photos')}}">
    </div>
    <div>
        <button type="submit" value="image">Save</button>
    </div>
    </form>
@endsection