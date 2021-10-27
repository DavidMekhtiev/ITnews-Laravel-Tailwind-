<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Register</title>
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class=" bg-gray-50">
        <div class=" shadow absolute top-1/3 left-1/2 w-72 min-h-80 -ml-36 -mt-40 rounded flex flex-col bg-white">
            <!-- Header -->
            <div class="text-center mb-2 mt-4 text-xl font-semibold">
                <h1>Register</h1>
            </div>
            <!-- END Header -->
        
            <form method="POST" action="{{ route('register') }}" class="ml-8">
                @csrf
        
                <div class="">
                    <label for="name" class="font-semibold">Name</label><br>
                    <input id="name" type="text" class="text-black rounded-sm w-56 border focus:border-gray-700 focus:outline-none @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                    @error('name')
                        <span class="text-red-900" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>
        
                <div class="mt-3">
                    <label for="email" class="font-semibold">E-Mail</label><br>
                    <input id="email" type="email" class="text-black rounded-sm w-56 border focus:border-gray-700 focus:outline-none @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            
                    @error('email')
                        <span class="text-red-900" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>
        
                <div class="mt-3">
                    <label for="password" class="font-semibold">Password</label><br>
                    <input id="password" type="password" class="text-black rounded-sm w-56 border focus:border-gray-700 focus:outline-none @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
                    @error('password')
                        <span class=" text-red-900" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        
                <div class="mt-3">
                  <label for="password-confirm" class="font-semibold">Confirm Password</label>
                  <input id="password-confirm" type="password" class="text-black rounded-sm w-56 border focus:border-gray-700  focus:outline-none" name="password_confirmation" required autocomplete="new-password">
                </div>
        
                <div class=" mt-4">
                  <button type="submit" class="h-7 rounded-sm w-56 text-white bg-gray-500 hover:bg-gray-600">
                      Register
                  </button>
                </div>
            </form>
            <div class="mt-4 mb-5 ml-7">
              <span>Already have an account? <a href="http://127.0.0.1:8000/login" class="text-sky-800">Sign in</a></span>
            </div>
        </div>
    </body>
</html>
    
