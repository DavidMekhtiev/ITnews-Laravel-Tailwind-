<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body style="background-color: #f0f0f0;">
    <div class=" h-12 w-full bg-gray-700 fixed top-0">
        <div class=" h-full w-7/12 m-auto grid grid-flow-col pt-3">
            <div class=" w-2/12 h-full -mt-1">
                <a href="{{ route('posts.new') }}" title="Home Page" style="font-family: 'Hammersmith One', sans-serif;" class=" text-4xl text-white align-bottom">ITnews</a>
            </div>
            <div class="  w-2/6 h-full ml-44 align-bottom">
                <form action="{{ route('posts.find') }}" class=" grid-flow-col grid" method="POST">
                    @csrf
                    @method('POST')
                    <input type="text" name="title" id="title" placeholder="Search..." class=" h-7 w-72 rounded-l-sm pl-1 pr-1">
                    <button class=" border w-8 rounded-r-sm" title="Search" type="submit">
                        <img src="https://img.icons8.com/ios/25/ffffff/search--v3.png"/>
                    </button>
                </form>
            </div>
            <div class=" w-2/12 h-full ml-auto mr-9 grid grid-flow-col -mt-2">
                <a href="{{ route('posts.create.page') }}" title="Creating a new post" class=" w-10 justify-self-end">
                    <img src="https://img.icons8.com/ios/35/ffffff/create-new.png"/>
                </a>
                <a href="{{ route('users.id', auth()->user()->id) }}" title="Profile" class=" border-2 rounded-xl w-10 h-10">
                    <img src="https://img.icons8.com/ios/35/ffffff/user--v1.png"/>
                </a>
            </div>
        </div>
    </div>
  
  <div class=" w-7/12 min-h-100 flex m-auto mt-24 rounded-sm">
    @yield('content')    
  </div>
</body>
</html>