@extends('layouts.app')
@section('title','Department')

@section('content')
    <div class="container p-3">
         @if(session('success'))
            <div>
                <h4>Data Inserted Successfully</h4>
            </div>
        @endif

            <form method="POST" action="{{route('dep_store')}}" enctype="multipart/form-data" class="container foom">
            @csrf

                <div>
                    <label class="form-group formm">Department Name</label>
                    <input class="form-control" type="text" name="name" value="{{old('name')}}">
                    @error('name')
                        <p>{{$message}}</p>
                    @enderror
                </div>  
                 <div>
                    <button class="primary" type="submit">Save</button>
                </div>         
            </form>    
    </div>
@endsection




