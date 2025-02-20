<x-layout>
    <!-- Hero Section -->
    <div class="relative h-96 w-full">
        <img src="{{ asset('storage/' . $recette->image) }}" class="w-full h-full object-cover" alt="{{ $recette->titre }}">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="absolute bottom-0 left-0 right-0 p-8">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-4xl font-bold text-white mb-4">{{ $recette->titre }}</h1>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Recipe Details Card -->
        <div class="bg-white rounded-xl shadow-xl overflow-hidden mb-12">
            <!-- Recipe Metadata -->
            <div class="grid grid-cols-3 divide-x divide-gray-200 p-6">
                <div class="text-center">
                    <i class="fas fa-clock text-indigo-600 text-xl mb-2"></i>
                    <p class="text-sm text-gray-600">Préparation</p>
                    <p class="font-semibold">{{ $recette->preparation_time }} min</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-fire text-indigo-600 text-xl mb-2"></i>
                    <p class="text-sm text-gray-600">Cuisson</p>
                    <p class="font-semibold">{{ $recette->cooking_time }} min</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-tag text-indigo-600 text-xl mb-2"></i>
                    <p class="text-sm text-gray-600">Catégorie</p>
                    <p class="font-semibold">{{ $recette->category }}</p>
                </div>
            </div>

            <!-- Ingredients Section -->
            <div class="p-8 bg-gray-50">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                    <i class="fas fa-list-ul text-indigo-600 mr-3"></i>Ingrédients
                </h3>
                <div class="prose max-w-none">
                    {{ $recette->ingredients }}
                </div>
            </div>

            <!-- Instructions Section -->
            <div class="p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                    <i class="fas fa-utensils text-indigo-600 mr-3"></i>Instructions
                </h3>
                <div class="prose max-w-none">
                    {{ $recette->instructions }}
                </div>
            </div>
        </div>

        <!-- Comments Section -->
        <div class="bg-white rounded-xl shadow-xl overflow-hidden">
            <div class="p-6 border-b border-gray-200 bg-gray-50">
                <h3 class="text-2xl font-bold text-gray-900">Commentaires</h3>
            </div>
            <div class="p-6">
                <form action="{{ route('commentaires.store') }}" method="POST" class="mb-8">
                    @csrf
                    <input type="hidden" name="recette_id" value="{{ $recette->id }}">
                    <div>
                        <textarea
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                            name="contenu" 
                            rows="3" 
                            placeholder="Partagez votre expérience..."
                            required></textarea>
                    </div>
                    <button type="submit"
                        class="mt-4 px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                        <i class="fas fa-paper-plane mr-2"></i>Ajouter un commentaire
                    </button>
                </form>

                <div class="space-y-6">
                    @foreach($com as $commentaire)
                        <div class="bg-gray-50 rounded-lg p-6">
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 rounded-full bg-indigo-600 flex items-center justify-center">
                                        <i class="fas fa-user text-white"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <p class="text-gray-800">{{ $commentaire->contenu }}</p>
                                    <p class="text-sm text-gray-500 mt-2">{{ $commentaire->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout>