<x-layout>
    <div class="bg-gray-100">
        <!-- Header Section -->
        <div class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold text-gray-900">Tableau de bord</h1>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <!-- Recettes Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Total Recettes</p>
                                <p class="text-3xl font-bold text-indigo-600">{{ $totalRecettes }}</p>
                            </div>
                            <div class="p-3 bg-indigo-100 rounded-full">
                                <i class="fas fa-utensils text-2xl text-indigo-600"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-indigo-50 px-6 py-3">
                        <a href="/recettes" class="text-sm text-indigo-600 font-medium hover:text-indigo-500">
                            Voir toutes les recettes →
                        </a>
                    </div>
                </div>

                <!-- Expériences Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Total Expériences</p>
                                <p class="text-3xl font-bold text-green-600">{{ $totalExperiences }}</p>
                            </div>
                            <div class="p-3 bg-green-100 rounded-full">
                                <i class="fas fa-book-open text-2xl text-green-600"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-green-50 px-6 py-3">
                        <a href="/experiences" class="text-sm text-green-600 font-medium hover:text-green-500">
                            Voir toutes les expériences →
                        </a>
                    </div>
                </div>

                <!-- Commentaires Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Total Commentaires</p>
                                <p class="text-3xl font-bold text-purple-600">{{ $totalCommentaires }}</p>
                            </div>
                            <div class="p-3 bg-purple-100 rounded-full">
                                <i class="fas fa-comments text-2xl text-purple-600"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-purple-50 px-6 py-3">
                        <span class="text-sm text-purple-600 font-medium">
                            Dernière mise à jour: {{ now()->format('d/m/Y H:i') }}
                        </span>
                    </div>
                </div>
            </div>

            <!-- Additional Stats or Charts could go here -->
        </div>
    </div>
</x-layout>