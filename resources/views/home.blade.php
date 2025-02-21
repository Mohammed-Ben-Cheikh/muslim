<x-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
        {{-- Dernières Expériences --}}
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-4">Dernières Expériences</h2>
                <div class="space-y-4">
                    @foreach($experiences as $experience)
                        <div class="border-b pb-2 hover:bg-gray-50 transition-colors duration-200">
                            <h3 class="font-semibold text-lg text-gray-800">{{ $experience->title }}</h3>
                            <p class="text-gray-600 text-sm mb-2">
                                Par <span class="font-medium">{{ $experience->user->name ?? 'Anonyme' }}</span> -
                                <span class="italic">{{ $experience->created_at->diffForHumans() }}</span>
                            </p>
                            <div class="flex justify-end">
                                <a class="text-blue-500 hover:text-blue-700 text-sm font-medium flex items-center"
                                    href="/experiences/{{ $experience->id }}">
                                    Voir plus
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('experiences.index') }}"
                    class="mt-4 inline-block text-green-600 hover:text-green-800">
                    Voir plus →
                </a>
            </div>
        </div>

        {{-- Recettes populaires --}}
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-4">Recettes populaires</h2>
                <div class="space-y-4">
                    @foreach($recettes as $recette)
                        <div class="border-b pb-2 hover:bg-gray-50 transition-colors duration-200">
                            <h3 class="font-semibold text-lg text-gray-800 mb-1">{{ $recette->title }}</h3>
                            <div class="flex items-center gap-2">
                                <p class="text-gray-600 text-sm">
                                    {{ $recette->comments_count ?? 0 }} {{ Str::plural('avis', $recette->comments_count ?? 0) }}
                                </p>
                            </div>
                            <div class="flex justify-end mt-2">
                                <a href="/recettes/{{ $recette->id }}" 
                                   class="text-blue-500 hover:text-blue-700 text-sm font-medium flex items-center">
                                    Voir la recette
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('recettes.index') }}" class="mt-4 inline-block text-green-600 hover:text-green-800">
                    Voir plus →
                </a>
            </div>
        </div>

        {{-- Statistiques --}}
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-4">Statistiques</h2>
                <div class="space-y-4">
                    <div class="flex justify-between">
                        <span>comments actifs</span>
                        <span class="font-bold">{{ $stats['users'] }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Expériences partagées</span>
                        <span class="font-bold">{{ $stats['experiences'] }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Recettes publiées</span>
                        <span class="font-bold">{{ $stats['recettes'] }}</span>
                    </div>
                </div>
                <a href="{{ route('statistiques') }}" class="mt-4 inline-block text-green-600 hover:text-green-800">
                    Voir plus →
                </a>
            </div>
        </div>
    </div>
</x-layout>