@extends('layouts.app')

@section('content')
<html>
<title>
</title>
<head>

</head>
<style>
  </style>  
<body>
    
    <h1 class="text-red">Whatagraph is a cross-channel reporting tool that helps businesses to track, measure, and analyze marketing performance with clients and teams. 
    Users can automatically pull data from all of their marketing ... 
    Learn more about Whatagraph</h1>
    @foreach($departments as $key=> $department)
                                     <option value="{{$department->name}}">
                                       {{$department->name}}
                                   </option>
                                    
     @endforeach

</body>


</html>
@endsection

