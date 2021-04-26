@extends('layouts.app')
@section('title','Home')

@section('content')
    <div class="container p-3">
         @if(session('success'))
            <div>
                <h4>Data Inserted Successfully</h4>
            </div>
        @endif

            <form method="POST" action="{{route('stu_store') }}" enctype="multipart/form-data" class="container foom">
            @csrf

                <div>
                    <label class="form-group formm">Student Name</label>
                    <input class="form-control" type="text" name="name" value="{{old('name')}}">
                    @error('name')
                        <p>{{$message}}</p>
                    @enderror
                </div>  
                <div method="POST" action="{{route('stu_store') }}" enctype="multipart/form-data">
                    <label class="form-group formm">Image</label>
                    <input class="form-control" type="file" name="photos">
                    @error('photos')
                        <p>{{$message}}</p>
                    @enderror
                </div> 
                <div>
                    <label class="form-group formm">Age</label>
                    <input class="form-control" type="text" name="age" value="{{old('age')}}">
                    @error('age')
                        <p>{{$message}}</p>
                    @enderror
                </div> 
                <div>
                    <label class="form-group">Department</label>
                    <select class="form-control form-select" name="department_id" aria-label="Default select example" style="font-size: 13px;">
                                    @foreach($departments as $key=> $department)
                                     <option value="{{$department->name}}">
                                       {{$department->name}}
                                   </option>
                                    
                                    @endforeach
                    </select>
                </div>
                <div>
                    <label class="form-group">Subject</label>
                    <select class="form-control form-select" name="subject_id" aria-label="Default select example" style="font-size: 13px;">
                                    @foreach($subjects as $key=> $subject)
                                     <option value="{{$subject->sub_name}}">
                                       {{$subject->sub_name}}
                                   </option>
                                   @endforeach
                    </select>
                </div>
                <div>
                    <label class="form-group">Class</label>
                    <select class="form-control form-select" name="ateam_id" aria-label="Default select example" style="font-size: 13px;">
                                    @foreach($ateams as $key=> $ateam)
                                     <option value="{{$ateam->class_name}}">
                                       {{$ateam->class_name}}
                                   </option>
                                   @endforeach
                    </select>
                </div>
                <div>
                    <button class="succ" type="submit">Save</button>
                </div>          
            </form>    
    </div>
@endsection