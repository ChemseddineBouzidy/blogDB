
<header>
    <img src="https://images.pexels.com/photos/12199409/pexels-photo-12199409.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hero Image" class="hero-image">
    {{-- <div class="hero-text">
        <h1>Explore a World of Ideas</h1>
        <p>Your One-Stop Destination for Insights on Technology, Health, Travel, and Lifestyle!</p>
    </div> --}}
   
</header>
<x-master title="Explore a World of Ideas ">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            color: #333;
        }

        header {
            position: relative;
            text-align: center;
            color: white;
            margin-top: 60px
        }

        .hero-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero-text h1 {
            font-size: 36px;
            margin: 0;
        }

        .hero-text p {
            font-size: 18px;
        }

        .language-switch {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .language-switch select {
            padding: 5px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            background-color: #fff;
            color: #333;
        }

        .featured {
            padding: 30px 20px;
        }

        .featured h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .articles {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .article {
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .article:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .article img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .article-content {
            padding: 20px;
        }

        .article-content h3 {
            margin: 0 0 10px;
            font-size: 18px;
            color: #4facfe;
        }

        .article-content p {
            margin: 0;
            color: #666;
            font-size: 14px;
        }

        .article-footer {
            padding: 15px 20px;
            font-size: 12px;
            color: #999;
            border-top: 1px solid #eee;
            background: #fafafa;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
            margin-top: 40px;
            font-size: 14px;
        }
    </style>
</head>
<body>
  

    <section class="featured">
        <h2>Featured Articles</h2>
       
        <div class="articles">
            @foreach ($Blognews as $Blognews)
            @if ($Blognews->categoryname==='NEWS')
                
           
            <div class="article">
                <img src="{{ asset('storage/'.$Blognews->image) }}" alt="Article Image">
                <div class="article-content">
                    <h3>Pourquoi le Wydad Casablanca...</h3>
                    <p>Le Wydad...etc</p>
                </div>
                <div class="article-footer">chemseddine - MON-DEC-2024</div>
           
            </div>
            @endif
            @endforeach
            
    </section>

    
</div>
</x-master>