<x-layout>
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Recettes</h1>
            <a href="/recettes/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Ajouter une recette
            </a>
        </div>

        <!-- Système de filtrage -->
        <div class="bg-white p-4 rounded-lg shadow-md mb-6">
            <form method="GET" action="/recettes" class="flex flex-wrap gap-4">
                <div class="flex-1">
                    <select name="category" class="w-full px-3 py-2 border rounded-lg file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100">
                        <option value="">Toutes les catégories</option>
                        @foreach($categories as $category)
                            <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>
                                {{ $category }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Filtrer
                </button>
            </form>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-5">
            @foreach($recettes as $recette)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    @if($recette->image)
                        <img src="{{ asset('storage/' . $recette->image) }}" alt="{{ $recette->title }}"
                            class="w-full h-48 object-cover">
                    @endif
                    <div class="p-6">
                        <h2 class="text-xl font-semibold mb-2">{{ $recette->title }}</h2>
                        <p class="text-gray-600 mb-4">{{ Str::limit($recette->category, 150) }}</p>
                        <div class="flex justify-between items-center">
                            <a href="/recettes/{{ $recette->id }}" class="text-blue-500 hover:text-blue-700">
                                Voir plus
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $recettes->links() }}
    </div>
</x-layout>