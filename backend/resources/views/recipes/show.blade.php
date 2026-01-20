<x-layout>

    <h1 class="text-bold underline p-12 text-blue-500">{{ $recipe['title'] }}</h1>
    
     @foreach ($recipe['ingredients'] as $ingredient)
        
        <p>{{ $ingredient }}</p>
     @endforeach
</x-layout>