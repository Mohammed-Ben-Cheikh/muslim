<x-layout>
    <!-- Hero Section -->
    <div class="relative h-96 w-full">
        @if($experience->image)
            <img src="{{ asset('storage/' . $experience->image) }}" class="w-full h-full object-cover" alt="{{ $experience->title }}">
            <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        @else
            <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600"></div>
        @endif
        <div class="absolute bottom-0 left-0 right-0 p-8">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-4xl font-bold text-white mb-2">{{ $experience->title }}</h1>
                <p class="text-gray-200 text-lg">{{ $experience->date }}</p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-xl shadow-xl overflow-hidden">
            <div class="p-8">
                <div class="prose prose-lg max-w-none">
                    {{ $experience->content }}
                </div>

                <div class="mt-8 pt-6 border-t border-gray-200">
                    <a href="/experiences" 
                       class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Retour aux expériences
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>