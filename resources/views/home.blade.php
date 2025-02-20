<x-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
        {{-- Dernières Expériences --}}
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-4">Dernières Expériences</h2>
                <div class="space-y-4">
                    @foreach($experiences as $experience)
                        <div class="border-b pb-2">
                            <h3 class="font-semibold">{{ $experience->title }}</h3>
                            <p class="text-gray-600">
                                Par {{ $experience->user->name ?? 'Anonyme' }} - 
                                {{ $experience->created_at->diffForHumans() }}
                            </p>
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
                        <div class="border-b pb-2">
                            <h3 class="font-semibold">{{ $recette->title }}</h3>
                            <p class="text-gray-600">
                                ★★★★★ ({{ $recette->comments_count ?? 0 }} avis)
                            </p>
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('recettes.index') }}" 
                   class="mt-4 inline-block text-green-600 hover:text-green-800">
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
                <a href="{{ route('statistiques') }}" 
                   class="mt-4 inline-block text-green-600 hover:text-green-800">
                    Voir plus →
                </a>
            </div>
        </div>
    </div>
</x-layout>