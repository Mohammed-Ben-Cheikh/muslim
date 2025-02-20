<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan Community</title>
    <script src="https://muslim.test/js/tailwindcss.js"></script>
    <style>
        .ramadan-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M30 5l5 10 10 5-10 5-5 10-5-10-10-5 10-5z' fill='%23166534' fill-opacity='0.05'/%3E%3C/svg%3E");
        }

        .crescent-loader {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 3a9 9 0 1 1 0 18 9 9 0 0 1 0-18z' fill='%23166534' fill-opacity='0.1'/%3E%3C/svg%3E");
        }
    </style>
</head>

<body class="bg-gray-50 ramadan-pattern">
    <!-- Navigation avec style Ramadan -->
    <nav class="bg-gradient-to-r from-green-700 to-green-900 text-white shadow-lg">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <!-- Icône du croissant -->
                    <svg class="w-8 h-8 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 3C7.03 3 3 7.03 3 12C3 16.97 7.03 21 12 21C12.83 21 13.63 20.89 14.39 20.69C13.52 19.85 13 18.69 13 17.41C13 14.98 14.98 13 17.41 13C18.69 13 19.85 13.52 20.69 14.39C20.89 13.63 21 12.83 21 12C21 7.03 16.97 3 12 3Z"
                            fill="currentColor" />
                    </svg>
                    <h1 class="text-2xl font-bold font-arabic">Ramadan Community</h1>
                </div>
                <div class="space-x-4">
                    <x-nav-link href="/" :active="request()->is('/')">Accueil</x-nav-link>
                    <x-nav-link href="/experiences" :active="request()->is('experiences')">Expériences</x-nav-link>
                    <x-nav-link href="/recettes" :active="request()->is('recettes')">Recettes</x-nav-link>
                    <x-nav-link href="/statistiques" :active="request()->is('statistiques')">Statistiques</x-nav-link>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section avec style Ramadan -->
    <div class="container mx-auto px-4 py-8">
        <div class="text-center mb-12 relative">
            <!-- Éléments décoratifs -->
            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <svg class="w-24 h-24 opacity-10" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M12 3C7.03 3 3 7.03 3 12C3 16.97 7.03 21 12 21C12.83 21 13.63 20.89 14.39 20.69C13.52 19.85 13 18.69 13 17.41C13 14.98 14.98 13 17.41 13C18.69 13 19.85 13.52 20.69 14.39C20.89 13.63 21 12.83 21 12C21 7.03 16.97 3 12 3Z" />
                </svg>
            </div>

            <h2 class="text-4xl font-bold text-green-900 mb-4">رمضان كريم</h2>
            <p class="text-xl text-green-800 mb-2">Ramadan Moubarak</p>
            <p class="text-gray-600">Partagez vos expériences et découvrez celles des autres</p>
        </div>
    </div>
    <!-- Featured Content avec style Ramadan -->
    <main class="container mx-auto px-4">
        {{ $slot }}
    </main>
    <!-- Footer avec style Ramadan -->
    <footer class="bg-gradient-to-r from-green-900 to-green-700 text-white mt-12 py-8">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <p class="text-2xl mb-2">رمضان كريم</p>
                <p>Que ce mois sacré soit rempli de bénédictions</p>
            </div>
        </div>
    </footer>
</body>

</html>