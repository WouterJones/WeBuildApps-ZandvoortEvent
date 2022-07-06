@extends('components.layout')

@section('content')
    {{-- Winnaars lijst component --}}
    <x-card class="max-w-fit mx-auto mt-10 md:p-10 max-w-4xl mx-auto mt-10">

        <div class="text-center pt-6">
            <h2 class="text-2xl font-bold uppercase mb-1">Winnaars: </h2>
            <p>Ben jij één van de gelukkigen? Houd je mailbox in de gaten!</p>
            <a href="/">
                <button class="m-5 bg-laravel text-white rounded py-2 px-4 hover:bg-black" name="back">
                    Terug naar registratie!
                </button>
            </a>
        </div>

        {{-- Dynamic table loading on each entry--}}
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
                @unless(count($winners) == 0)                    
                        @foreach ($winners as $winner) {{-- Hij loopt op dit moment alleen maar over alle entries in de database --}}
                        <tr class="border-b">
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$winner->name}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                -
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                -
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$winner->numberplate}}
                            </td>
                        </tr>    
                        @endforeach
                    @else
                    <tr>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">Geen winnaars gevonden..</td>
                    </tr>
                    @endunless
                </tbody>

            </table>
        </div>
    </x-card>
@endsection
