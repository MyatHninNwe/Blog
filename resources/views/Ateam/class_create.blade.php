@extends('layouts.app')
@section('title','Ateam')

@section('content')
    <div class="container p-3">
         @if(session('success'))
            <div>
                <h4>Data Inserted Successfully</h4>
            </div>
        @endif

            <form method="POST" action="{{route('class_store')}}" enctype="multipart/form-data" class="container foom">
            @csrf

                <div>
                    <label class="form-group formm">Class Name</label>
                    <input class="form-control" type="text" name="class_name" value="{{old('class_name')}}">
                    @error('class_name')
                        <p>{{$message}}</p>
                    @enderror
                </div>  
                 <div>
                    <button class="primary" type="submit">Save</button>
                </div>         
            </form>    
    </div>
@endsection




