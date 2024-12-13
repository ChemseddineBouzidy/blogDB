<x-master title="Mon Profile ">
{{-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="{{ asset('/img/favicon.ico') }}">
<title>blog</title>
<!-- Bootstrap core CSS -->
<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Fonts -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="{{ asset('/css/mediumish.css') }}" rel="stylesheet">
<link href="{{ asset('/css/hero.css') }}" rel="stylesheet">


</head>
<body> --}}



<!-- Begin Site Title
================================================== -->
<div class="container">
	<div class="mainheading">
		<h1 class="sitetitle">Explore a World of Ideas – Discover Articles on Technology, Lifestyle, Travel, and More!

		</h1>
		<p class="lead">
			"Your One-Stop Destination for Insights on Technology, Health, Travel, and Lifestyle!"




		</p>
	</div>
<!-- End Site Title
================================================== -->

	<!-- Begin Featured
	================================================== -->
	<section class="featured-posts">
	<div class="section-title">
		<h2><span>Featured</span></h2>
	</div>
	<div class="card-columns listfeaturedtag">
      
        @foreach ($Blog->slice(0, 4)  as $Blogs)
 
		<!-- begin post -->
		<div class="card">
          
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
					<a href="{{route('post.show',$Blogs->id)}}">
						<div class="thumbnail" style="background-image:url({{ asset('storage/'.$Blogs->image) }});">
						</div>
					</a>
				</div>
				<div class="col-md-7">
					<div class="card-block">
						<h2 class="card-title"><a href="{{route('post.show',$Blogs->id)}}">{{ Str::limit($Blogs->title,27,'....etc')}}</a></h2>
						<h4 class="card-text">{!! Str::limit($Blogs->description,10,'....etc')!!}.</h4>
						<div class="metafooter">
							<div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="{{route('post.show',$Blogs->id)}}"><img class="author-thumb" src="https://www.mediabistro.com/wp-content/uploads/2014/09/best-selling-author.jpg" alt="Sal"></a>
								</span>
								<span class="author-meta">
								<span class="post-name"><a href="{{route('post.show',$Blogs->id)}}">{{$Blogs->author}}</a></span><br/>
								<span class="post-date">{!!date('D-M-Y', strtotime($Blogs->created_at))!!}</span><span class="dot"></span><span class="post-read">{{-- 6 min read--}}</span> 
								</span>
								{{-- <span class="post-read-more"><a href="{{route('post.show',$Blogs->id)}}" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
            
		</div>
        @endforeach
		<!-- end post -->
       


		

	</div>
	</section>

	

	<section class="recent-posts">
	<div class="section-title">
		<h2><span>all blogs</span></h2>
	</div>

	<div class="card-columns listrecent">
		
        @foreach ($Blog as $Blogs)
	{{-- @if ($Blogs->categoryname==='sport') --}}
		

		<!-- begin post -->
		<div class="card">
		
			<a href="{{route('post.show',$Blogs->id)}}">
				<img class="img-fluid" src="{{ asset('storage/'.$Blogs->image) }}" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="{{route('post.show',$Blogs->id)}}">{{Str::limit($Blogs->title,30,'....etc')}}</a></h2>
				<h4 class="card-text">{{ Str::limit($Blogs->description,20,'....etc')}}.	{{$Blogs->categoryname}}</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="meta-footer-thumb">
						<a href="{{route('post.show',$Blogs->id)}}"><img class="author-thumb" src="https://www.mediabistro.com/wp-content/uploads/2014/09/best-selling-author.jpg" alt="Sal"></a>
						</span>
						<span class="author-meta">
						<span class="post-name"><a href="{{route('post.show',$Blogs->id)}}">{{$Blogs->author}}</a></span><br/>
						<span class="post-date">{{date('D-M-Y', strtotime($Blogs->created_at))}}</span><span class="dot"></span><span class="post-read"></span>
						</span>
					</div>
				</div>
			</div>
		</div>
		{{-- @endif --}}

        @endforeach
	
		<!-- end post -->
		

		
	

	</div>
	</section>
	
	<!-- End List Posts
	================================================== -->


	
	{{$Blog->links()}}




</div>
<!-- /.container -->

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{-- <script src="{{ asset('/js/main.js') }}"></script>
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>{{ asset('/js/bootstrap.min.js') }}
<script src="{{ asset('/js/ie10-viewport-bug-workaround.js') }}"></script>



</body>
</html> --}}
</x-master> 