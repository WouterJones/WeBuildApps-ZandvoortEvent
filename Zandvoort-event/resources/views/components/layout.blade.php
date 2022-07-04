<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#d60443",
                    },
                },
            },
        };
    </script>
    <title>Zandvoort Personenauto Race | Sign-up</title>
</head>

<body>

    <main>

        <section class="relative h-80 flex justify-center align-center text-center space-y-4 mb-4">
            <div class="absolute top-0 left-0 w-full h-full opacity-1 bg-cover bg-center"
                style="background-image: url('images/circuit-whole.png')"></div>

            <div class="z-10">
                <a href="https://www.circuitzandvoort.nl/"><img class="inline w-1/2 pt-10" src="{{ asset('images/CZ-Logo-Main.png') }}"
                        alt="" class="logo" /></a>
            </div>
        </section>

        <x-card class="p-10 max-w-lg mx-auto mt-10">
            <header class="text-center">
                <p class="mb-4">Registreer je snel voor de</p>
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Zandvoort Personenauto Race!
                </h2>
            </header>

            <form method="POST" action="/" enctype="multipart/form-data">

                @csrf {{-- prevents cross site scripting --}}

                <div class="mb-6">
                    <label for="naam" class="inline-block text-lg mb-2">Naam</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="naam"
                        value="{{ old('naam') }}" />

                    @error('naam')
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
                    <label for="tags" class="inline-block text-lg mb-2">
                        Kenteken
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="kenteken"
                        value="{{ old('kenteken') }}" placeholder="Voorbeeld: XX-000-X" />

                    @error('tags')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                        Submit!
                    </button>
                </div>
            </form>
        </x-card>

        <section class="relative h-80 flex justify-center align-center text-center space-y-4 mb-4 pt-10">
            <div class="absolute left-0 w-full h-full opacity-1 bg-no-repeat bg-center"
                style="background-image: url('images/circuitlane.jpg')"></div>
        </section>

    </main>

    <footer
        class="p-4 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-50 md:justify-center">
        <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
    </footer>

    <x-flash-message />
</body>

</html>
