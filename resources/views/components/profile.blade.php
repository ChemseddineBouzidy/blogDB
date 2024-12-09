{{-- <div class="card col-sm-3 mb-4 mx-5">
    <img src="https://fastly.picsum.photos/id/4/5000/3333.jpg?hmac=ghf06FdmgiD0-G4c9DdNM8RnBIN7BO0-ZGEw47khHP4" class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title">{{$voiture->matricule}}</h3>
      <h5 class="card-title">{{$voiture->marque}}</h5>
      <p class="card-text">{{ Str::limit($voiture->modele,50,'....etc')}}</p>
      <p class="card-text"><small class="text-muted">{{$voiture->prixjour}}</small></p>
      <a href="{{route('profiles.show',$voitures->id)}}"class="btn btn-primary stretched-link">Afficher</a> 
    </div>
</div> --}}


<tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
             
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$voiture->matricule}}
                </th>
                <td class="px-6 py-4">
                    {{$voiture->marque}}
                </td>
                <td class="px-6 py-4">
                    {{ Str::limit($voiture->modele,50,'....etc')}}
                </td>
                <td class="px-6 py-4">
                    {{$voiture->carburant}}
                </td>
                <td class="px-6 py-4">
                    {{$voiture->couleur}}
                </td>
                <td class="px-6 py-4">
                    @if ($voiture->climatisation == 0)
                    non
                    @else
                    oui
                    @endif
                </td>
                <td class="px-6 py-4">
                    {{$voiture->prixjour}}
                </td>

                <td class="px-6 py-4">
                    <a href="{{route('post.show',$voiture->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">view</a>      
                </td>
                <td>
                    <form action="{{route('post.destroy',$voiture->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm float-end">Deleted</button>
                        <button type="submit" class="text-white bg-red-700 hover:bg-white-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="h-4 w-4 text-white-700"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="3 6 5 6 21 6" />  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />  <line x1="10" y1="11" x2="10" y2="17" />  <line x1="14" y1="11" x2="14" y2="17" /></svg>
                            <span class="sr-only">Icon description</span>
                            </button>
                       {{-- <a href="{{route('post.show',$voiture->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delete</a>  --}}
                      </form>
                </td>
                <td>
                    <form action="{{route('post.edit',$voiture->id)}}" method="GET">
                        {{-- @method('PUT') --}}
                        @csrf
                        
                        {{-- <button class="btn mx-1    btn-primary btn-sm float-end">Update</button> --}}
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="h-4 w-4 text-white-700" <svg  width="24"  height="24"  viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z" /></svg>
                            <span class="sr-only">Icon description</span>
                            </button>
                      </form>
                </td>
                <TD>
                  
                </TD>
            </tr>
            

        </tbody>
