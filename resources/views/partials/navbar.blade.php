<!-- Begin Nav
================================================== -->
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">
    <!-- Begin Logo -->
    <a class="navbar-brand" href="{{route('post.allblogs')}}">
    <img src="{{ asset('storage/Logo.png') }}" class="imagelogo" alt="logo">
    </a>
    <!-- End Logo -->
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <!-- Begin Menu -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
        <a class="nav-link" href="{{route('post.allblogs')  }}">All <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('post.sport')}}">Sport</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('post.news')}}">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('post.web')}}">Web Dev</a>
          </li>
      
    
    </ul>
      <!-- End Menu -->
      <!-- Begin Search -->
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path></svg></span>
      </form>
      <!-- End Search -->
      
    </div>
    <ul class="navbar-nav ml-auto mt-1">
    <li class="nav-item">
      <a class="nav-link" href="{{route('login')}}">
        <svg class="h-8 w-8 text-red-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />  <path d="M20 12h-13l3 -3m0 6l-3 -3" /></svg>
        </a>
      </li>
    </ul>
  </div>
  </nav>
  <!-- End Nav
  ================================================== -->