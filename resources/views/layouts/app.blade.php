<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>


<body class="bg-gray-300">
    <nav class="p-6 bg-white flex justify-between mb-6 font-bold" >
        <ul class="flex items-center ">
            <li>
                <a href="" class="p-4">Home</a>
            </li>
            <li>
                <a href="" class="p-4">Dashboard</a>
            </li>
            <li>
                <a href="" class="p-4">Post</a>
            </li>
        </ul>

        <ul class="flex items-center">

            {{-- Blade if else method --}}

            @auth


            <li>
                <a href="" class="p-4">Floki The Great</a>
            </li>
            <li>
                <form action="{{ route('logout')}}" method="post">
               <button type="submit" class="p-3">Logout</button>

                </form>
             </li>
            @endauth

            @guest
            <li>
                <a href="{{ route('login')}}" class="p-4">Login</a>
            </li>
            <li>
                <a href="{{route('register')}}" class="p-4">Register</a>
            </li>

            @endguest



        </ul>
    </nav>
    @yield('content')
</body>
</html>
