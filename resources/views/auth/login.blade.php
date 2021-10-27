<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Login</title>
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="shadow absolute top-1/3 left-1/2 w-72 min-h-48 -ml-36 -mt-28 rounded flex flex-col">
            <!-- Header -->
            <div class="text-center mb-4 mt-4 text-xl font-semibold">
                <h1>Sign In</h1>
            </div>
            <!-- END Header -->
          
            <!-- Sign In Form -->
            <form method="POST" action="{{ route('login') }}" class="ml-8">
              @csrf
              <div class="">
                    <label class="font-semibold" for="email">E-mail</label>
                    <input id="email" type="email" placeholder="E-mail" class="text-black rounded-sm border w-56 focus:border-gray-700 focus:outline-none" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
            
                    @error('email')
                    <span class="text-red-900" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
              </div>
          
              <div class="mt-4">
                    <label class="font-semibold" for="password">Password</label>
                    <input id="password" type="password" placeholder="Password" class="text-black rounded-sm border w-56 focus:border-gray-700 focus:outline-none" name="password" required autocomplete="current-password" />
            
                    @error('password')
                    <span class="text-red-900" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
              </div>
          
              <div class="mt-4">
                    <button type="submit" class="h-7 rounded-sm w-56 text-white bg-gray-500 hover:bg-gray-600">Sign in</button>
              </div>
            </form>
            <!-- END Sign In Form -->
            <div class="mt-4 mb-5 ml-5">
                <span>Don't have an account yet? <a href="http://127.0.0.1:8000/register" class="text-sky-800">Sign up</a></span>
            </div>
        </div>
    </body>
</html>
