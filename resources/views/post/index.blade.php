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