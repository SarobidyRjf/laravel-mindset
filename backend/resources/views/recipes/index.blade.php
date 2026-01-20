<x-layout>

    <h1>My Recipes</h1>
    
     @foreach ($recipes as $key => $recipe)
        
        <p><a href="{{ route('recipes.show', $key) }} " class="underline text-blue-700">{{ $recipe['title']}}</a></p>
     @endforeach
</x-layout>