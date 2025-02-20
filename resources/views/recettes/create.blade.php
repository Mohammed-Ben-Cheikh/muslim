<x-layout>
    <div class="container mx-auto p-4">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Ajouter une recette</h2>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('recettes.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Titre de la recette</label>
                <input type="text" id="title" name="title" required
                    class="px-3 py-2 block w-full border rounded-lg  shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('title') border-red-500 @enderror">
                @error('title')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="category" class="block text-sm font-medium text-gray-700">Catégorie</label>
                <select id="category" name="category"
                    class="px-3 py-2 block w-full border rounded-lg  shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('category') border-red-500 @enderror">
                    <option value="">Sélectionner une catégorie</option>
                    <option value="Entrées">Entrées</option>
                    <option value="Plats Principal">Plats Principal</option>
                    <option value="Desserts">Fesserts</option>
                </select>
                @error('category')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="ingredients" class="block text-sm font-medium text-gray-700">Ingrédients</label>
                <textarea id="ingredients" name="ingredients" rows="4" required
                    class="px-3 py-2 block w-full border rounded-lg  shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('ingredients') border-red-500 @enderror"></textarea>
                @error('ingredients')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="instructions" class="block text-sm font-medium text-gray-700">Instructions</label>
                <textarea id="instructions" name="instructions" rows="6" required
                    class="px-3 py-2 block w-full border rounded-lg  shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('instructions') border-red-500 @enderror"></textarea>
                @error('instructions')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="preparation_time" class="block text-sm font-medium text-gray-700">Temps de préparation
                        (minutes)</label>
                    <input type="number" id="preparation_time" name="preparation_time" required
                        class="px-3 py-2 block w-full border rounded-lg  shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('preparation_time') border-red-500 @enderror">
                    @error('preparation_time')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="cooking_time" class="block text-sm font-medium text-gray-700">Temps de cuisson
                        (minutes)</label>
                    <input type="number" id="cooking_time" name="cooking_time" required
                        class="px-3 py-2 block w-full border rounded-lg  shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('cooking_time') border-red-500 @enderror">
                    @error('cooking_time')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" id="image" name="image"
                    class="px-3 py-2 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 rounded-lg file:border file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100 @error('image') border-red-500 @enderror">
                @error('image')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full bg-indigo-600 text-white py-2 px-4 border rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Enregistrer la recette
            </button>
        </form>
    </div>
</x-layout>