@extends('layouts.app')

@section('content')
<html>
<title>
</title>
<head>

</head>
<style>
    
    .read_btn{
        
            background-color:#670216;
            width:100px;
    }
    .contact{
        background-color:#e1e5e7;
    }

</style>
<body>
<div class="container">
    
<div class="row">

<div class="col-md-12">

  

  <i class="text-red">Whatagraph is a cross-channel reporting tool that helps businesses to track, measure, and analyze marketing performance with clients and teams. 
    Users can automatically pull data from all of their marketing ... 
    Learn more about Whatagraph</i>
 
    @foreach($students as $key => $student)

    <img class="card-in my-2 py-2 mx-auto photos" src="{{asset('image/'.$student->photos)}}" alt="hello" style="width:250px;height:200px;image:thumbnail;">
    @endforeach
</div>



</div>


</div>



 </div>
</body>
</html>
@endsection




        


        
