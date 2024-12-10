{{-- 
<x-master title="Home Page">



            


  <form class="max-w-sm mx-auto" method="POST" action="{{ route('login') }}">
    <h3>login</h3>
  @csrf
  <div class="mb-5">
    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
    <input type="email" name="email" value="{{ old('email') }}" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required />
    @error('email')
    <div class="text-danger">{{$message}}</div> 
 @enderror
  </div>
  <div class="mb-5">
    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
    <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
  </div>

  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Se connecter</button>
</form>

     

    

 
     
</x-master> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        {{-- flowbite css --}}
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
        {{-- tailwindcss css --}}
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
        <script src="https://cdn.tailwindcss.com"></script>
          <!-- Font Icon -->
        <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">

        <!-- Main css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                clifford: '#da373d',
              }
            }
          }
        }
      </script>
        <style type="text/tailwindcss">
            @layer utilities {
              .content-auto {
                content-visibility: auto;
              }
            }
          </style>
</head>
<body>



</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="register-form"  action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" value="{{ old('email') }}admin@admin.com" id="email" placeholder="Your Email"/>
                                @error('email')
                                <div class="text-danger">{{$message}}</div> 
                             @enderror
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" value="admin@admin.com"  placeholder="Password"/>
                                @error('password')
                                <div class="text-danger">{{$message}}</div> 
                             @enderror
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                              </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ asset('images/login/signup-image.jpg') }}" alt="sing up image"></figure>
                                @if ($errors->any())

                                <div class="flex p-1  my-1 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                  <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                  </svg>
                                  <span class="sr-only">Danger</span>
                                  <div>
                                    <span class="font-medium">Ensure that these requirements are met:</span>
                                      <ul class="mt-1.5 list-disc list-inside">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                    </ul>
                                  </div>
                                </div>
                              @endif
                    </div>
                </div>
            </div>
       
        </section>

      

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>