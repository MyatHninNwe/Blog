@extends('layouts.app')
@section('title','Subject')

@section('content')
    <div class="container p-3">
         @if(session('success'))
            <div>
                <h4>Data Inserted Successfully</h4>
            </div>
        @endif

            <form method="POST" action="{{route('sub_store')}}" enctype="multipart/form-data" class="container foom">
            @csrf

                <div>
                    <label class="form-group formm">Subject Name</label>
                    <input class="form-control" type="text" name="sub_name" value="{{old('sub_name')}}">
                    @error('sub_name')
                        <p>{{$message}}</p>
                    @enderror
                </div>  
                 <div>
                    <button class="danger" type="submit">Save</button>
                </div>         
            </form>    
    </div>
@endsection




