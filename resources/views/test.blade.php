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
    {{-- link css --}}
{{-- editorblo --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="{{ asset('/css/site.css') }}" rel="stylesheet">
<link href="{{ asset('/css/richtext.min.css') }}" rel="stylesheet">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.richtext.js') }}"></script>
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
    <title>Welcome to</title>
    {{-- <title> @yield('title','...')</title> --}}
</head>
<body>
    <div class="container mx-auto px-28 pt-24">
        <!-- ... -->      <div class="page-wrapper box-content">

        <textarea class="content" name="example">a</textarea>

    </div>
      </div>

    <script>
      $(document).ready(function() {
          $('.content').richText();
      });
      </script>

<script src="{{ asset('/js/main.js') }}"></script>
</body>
</html>
