<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- flowbite css --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    {{-- tailwindcss css --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- link custome css --}}
    <link href="{{ asset('/css/hero.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/blogshow.css') }}" rel="stylesheet">

    <title>Welcome to </title>


</head>
<body>
    
    {{-- <div id="l">
        @include('partials.navbar') 
        <div class="container mx-auto ">
        
            <div class="header">
                <h2>Blog Name</h2>
            </div>
              
            <div class="row">
                <div class="leftcolumn">
                    <div class="card">
                        <h2 class="titleText">{!!$Blog->title!!}</h2>{!!date('D-M-Y', strtotime($Blog->created_at))!!}
                
                        <img class="fakeimg" src="{{ asset('storage/'.$Blog->image) }}" alt="" srcset="">
                        <p></p><br>
                        <p>{!!$Blog->description!!}</p>
                    </div>
               
                </div>
            </div>
        </div>
        
    </div> --}}

        {{-- <h2 class="titleText"> {{$Blog->title}}</h2>
        <section class="about container" id="about">
            <div class="contentBx">
                <img src=" {{ asset('storage/'.$Blog->image) }}" alt="" class="fitBg">
                <p class="title-text">
                 {!!$Blog->description!!}
           
                </p>
                <a href="#" class="btn2">Read more</a>
            </div>
         
    </section> --}}
 
 
    <div id="main">
        
        <div id="l">
            @include('partials.navbar') 
            <div class="container mx-auto ">
        
                <div class="header">
                    <h2>Blog Name</h2>
                </div>
                  
                <div class="row">
                    <div class="leftcolumn">
                        <div class="card">
                            <h2 class="titleText">{!!$Blog->title!!}</h2>{!!date('D-M-Y', strtotime($Blog->created_at))!!}
                    
                            <img class="fakeimg" src="{{ asset('storage/'.$Blog->image) }}" alt="" srcset="">
                            <p></p><br>
                            <p>{!!$Blog->description!!}</p>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
        <div id="r">
            Right panel
        </div>
        </div>
   

    

    
