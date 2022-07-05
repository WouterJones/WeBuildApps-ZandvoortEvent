{{-- Registration form --}}
<x-card class="p-10 max-w-lg mx-auto mt-10">
    <header class="text-center">
        <p class="mb-4">Registreer je <b>snel</b> voor de</p>
        <h2 class="text-2xl font-bold uppercase mb-1">
            Zandvoort Personenauto Race!
        </h2>
    </header>

    <form method="POST" action="/entries" enctype="multipart/form-data">

        @csrf {{-- prevents cross site scripting --}}

        <div class="mb-6">
            <label for="name" class="inline-block text-lg mb-2">Naam</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                value="{{ old('name') }}" />

            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2">Email adres</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                value="{{ old('email') }}" />

            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="numberplate" class="inline-block text-lg mb-2">Kenteken</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="numberplate"
                value="{{ old('numberplate') }}" placeholder="Voorbeeld: XX-000-X" />

            @error('numberplate')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black" name="submit">
                Submit!
            </button>
        </div>
    </form>
</x-card>
