<x-layout>
    {{-- Sections principales --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
        {{-- Dernières Expériences --}}
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-4">Dernières Expériences</h2>
                <div class="space-y-4">
                    <div class="border-b pb-2">
                        <h3 class="font-semibold">Mon premier Ramadan</h3>
                        <p class="text-gray-600">Par Ahmed - Il y a 2 jours</p>
                    </div>
                    <div class="border-b pb-2">
                        <h3 class="font-semibold">La prière de Tarawih</h3>
                        <p class="text-gray-600">Par Fatima - Il y a 3 jours</p>
                    </div>
                </div>
                <a href="/experiences" class="mt-4 inline-block text-green-600 hover:text-green-800">Voir plus →</a>
            </div>
        </div>

        {{-- Recettes populaires --}}
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-4">Recettes populaires</h2>
                <div class="space-y-4">
                    <div class="border-b pb-2">
                        <h3 class="font-semibold">Harira traditionnelle</h3>
                        <p class="text-gray-600">★★★★★ (24 avis)</p>
                    </div>
                    <div class="border-b pb-2">
                        <h3 class="font-semibold">Chebakia marocaine</h3>
                        <p class="text-gray-600">★★★★☆ (18 avis)</p>
                    </div>
                </div>
                <a href="/recettes" class="mt-4 inline-block text-green-600 hover:text-green-800">Voir plus →</a>
            </div>
        </div>

        {{-- Statistiques --}}
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-4">Statistiques</h2>
                <div class="space-y-4">
                    <div class="flex justify-between">
                        <span>Membres actifs</span>
                        <span class="font-bold">1,234</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Expériences partagées</span>
                        <span class="font-bold">456</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Recettes publiées</span>
                        <span class="font-bold">89</span>
                    </div>
                </div>
                <a href="/statistiques" class="mt-4 inline-block text-green-600 hover:text-green-800">Voir plus →</a>
            </div>
        </div>
    </div>
</x-layout>