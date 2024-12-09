{{-- <x-master title="Mon Profile ">
   
    <img src="{{ asset('storage/'.$Blog->image) }}">



a
    {{$Blog->title}} <br>


    {{ Str::limit($Blog->description,50,'....etc')}} <br>




    </x-master> --}}
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
      <link href="{{ asset('/css/hero.css') }}" rel="stylesheet">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
        <title>Welcome to {{$title}}</title>
        {{-- <title> @yield('title','...')</title> --}}
    </head>
    <body>

        <section class="about container" id="about">
            <div class="contentBx">
                <h2 class="titleText"> {{$Blog->title}}</h2>
                <p class="title-text">
                 {!! Str::limit($Blog->description,20,' ....etc')!!}
                </p>
                <a href="#" class="btn2">Read more</a>
            </div>
            <div class="imgBx">
                <img src=" {{ asset('storage/'.$Blog->image) }}" alt="" class="fitBg">
            </div>
        </section>

        <div class="post-filter container">
            <span class="filter-item active-filter" data-filter="all">All</span>
            <span class="filter-item" data-filter="sport">sport</span>
            <span class="filter-item" data-filter="food">Food</span>
            <span class="filter-item" data-filter="news">News</span>
         
        </div>
        
        <div class="post container">
            <!-- Post 1 -->
            {{-- @foreach ($blogs  as $blog)
            <div class="post-box {{$blog['category']}}">
                <img src="{{$blog['image']}}" alt="" class="post-img">
                <h2 class="category"><div class="tes">{{$blog['category']}}</div></h2>
                <a href="#" class="post-title">   {!! Str::limit($blog['title'],50,' ....etc')!!}</a>
                <span class="post-date">{{$blog['date']}}</span>
                <p class="post-description"> {!! Str::limit($blog['description'],50,' ....etc')!!}</p>
                <div class="profile">
                    <img src="{{$blog['authoravatar']}}" alt="" class="profile-img">
                    <span class="profile-name">{{$blog['author']}}</span>
                </div>
            </div>
            @endforeach --}}
        
      
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('/js/main.js') }}"></script>
    </body>
    </html>
    
    
    
