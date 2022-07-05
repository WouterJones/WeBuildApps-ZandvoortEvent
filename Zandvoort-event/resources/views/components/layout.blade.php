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
                <a href="https://www.circuitzandvoort.nl/"><img class="inline w-1/2 pt-10"
                        src="{{ asset('images/CZ-Logo-Main.png') }}" alt="" class="logo" /></a>
            </div>
        </section>

        <div class="grid grid-rows-3 grid-flow-col gap-4 justify-center">

            <div class="row-span-3 ...">
                @include('partials._registration-form') 
            </div>
            <div class="col-span-2 ...">
                @include('partials._counter')
            </div>
            <div class="row-span-2 col-span-2 ...">
                @include('partials._weather')
            </div>

        </div>

        <section class="relative h-80 flex justify-center align-center text-center space-y-4 mb-4 pt-10">
            <div class="absolute left-0 w-full h-full opacity-1 bg-no-repeat bg-center"
                style="background-image: url('images/circuitlane.jpg')"></div>
        </section>

    </main>

    <footer
        class="p-4 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-80 md:justify-center">
        <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
    </footer>

    <x-flash-message />

</body>

</html>
