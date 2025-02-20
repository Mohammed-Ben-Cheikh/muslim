<x-layout>
    <div class="container mx-auto p-4">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-4xl mx-auto">
            @if($experience->image)
                <img src="{{ asset('storage/' . $experience->image) }}" alt="{{ $experience->title }}"
                    class="w-full h-96 object-cover">
            @endif

            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-3xl font-bold">{{ $experience->title }}</h1>
                    <span class="text-gray-600">{{ $experience->date->format('d/m/Y') }}</span>
                </div>

                <div class="prose max-w-none mb-8">
                    {{ $experience->content }}
                </div>

                <div class="flex justify-between items-center">
                    <a href="/experiences" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                        Retour aux expériences
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>