@extends('components.layout')

@section('content')
    <x-card class="p-10 mx-auto mt-10">

        {{-- <div>
            <a href="/">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black" name="back">
                    Terug naar registratie!
                </button>
            </a>
        </div> --}}

        <div class="text-center pt-6">
            <h2 class="text-2xl font-bold uppercase mb-1">Winnaars: </h2>
            <p>Ben jij één van de gelukkigen? Houd je mailbox in de gaten!</p>
            <a href="/">
                <button class="m-5 bg-laravel text-white rounded py-2 px-4 hover:bg-black" name="back">
                    Terug naar registratie!
                </button>
            </a>
        </div>

        <div>
            <table class="min-w-full">
                <thead class="border-b">
                    <tr>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Naam
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Automerk
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Kleur auto
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Kenteken
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Wouter
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Peugeot
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Blauw
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            0-BX-558
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-card>
@endsection
