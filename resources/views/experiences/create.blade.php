<x-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-6">Ajouter une expérience</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('experiences.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Titre</label>
                <input type="text" name="title" id="title" 
                    class="w-full px-3 py-2 border rounded-lg @error('title') border-red-500 @enderror"
                    value="{{ old('title') }}" required>
            </div>

            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-bold mb-2">Description</label>
                <textarea name="content" id="content" rows="4" 
                    class="w-full px-3 py-2 border rounded-lg @error('content') border-red-500 @enderror"
                    required>{{ old('content') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="date" class="block text-gray-700 font-bold mb-2">Date</label>
                <input type="date" name="date" id="date" 
                    class="w-full px-3 py-2 border rounded-lg @error('date') border-red-500 @enderror"
                    value="{{ old('date') }}" required>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-bold mb-2">Image</label>
                <input type="file" name="image" id="image" 
                    class="w-full px-3 py-2 border rounded-lg @error('image') border-red-500 @enderror">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Enregistrer l'expérience
            </button>
        </form>
    </div>
</x-layout>
