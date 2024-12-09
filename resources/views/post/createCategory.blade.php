
<x-master title="Home Page">
      <!-- Success message (optional) -->
      @if(session('success'))
      <div id="alert-additional-content-3" class="p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
        <div class="flex items-center">
          <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
          </svg>
          <span class="sr-only">Info</span>
          <h3 class="text-lg font-medium">success</h3>
        </div>
        <div class="mt-2 mb-4 text-sm">
          {{session('success') }}
           </div>
        <div class="flex">
      
          <button type="button" class="text-green-800 bg-transparent border border-green-800 hover:bg-green-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-green-600 dark:border-green-600 dark:text-green-400 dark:hover:text-white dark:focus:ring-green-800" data-dismiss-target="#alert-additional-content-3" aria-label="Close">
            Dismiss
          </button>
        </div>
      </div>
    @endif
<!-- Display validation errors -->
@if ($errors->any())
    <ul>
       
    </ul>
    <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
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

<form class="max-w-sm mx-11" method="POST" action="{{ route('post.storecategory') }}" enctype="multipart/form-data">
  @csrf
<div class="flex gap-[45px] flex-wrap flex-row-reverse">

  

  
  <div class="grow">
    @csrf
    <p class="text-gray-900 text-4xl dark:text-white mb-4">Ajoutez une categorie :</p>



      <div class="mb-5">
          <label for="nameCategory" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name of Category</label>
          <input type="text" name="nameCategory" id="text" value="{{old('nameCategory')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="Sport,News ....." required />
          @error('matricule')
         
          <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <span class="font-medium">Danger alert!</span> {{$message}}
          </div>
      @enderror
        </div>
     
      <div class="mb-5">
        <label for="descriptionCategory" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description of Category</label>
        <input type="text" name="descriptionCategory" value="{{old('descriptionCategory')}}" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="this Category ....." required />
      </div>

      <button type="submit"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Envoyer</button>
    </form></div>
</div>


    </x-master>