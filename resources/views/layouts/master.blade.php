<html>

    <head>
        <title>
        @yield('title')
        </title>
        
    </head>

    <nav class="container text-center my-5 bg-dark">
            
    
    <a href="{{route('home')}}"><h2>Index Page</h2></a>
    

       
    </nav>
    @yield('content')

   
</html>
