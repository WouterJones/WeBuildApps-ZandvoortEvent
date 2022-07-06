@extends('components.layout')

@section('content')
    {{-- Registratie component --}}
    <p class="text-center pt-6">
        Is het jouw droom om met je eigen auto een op een circuit rijden? dan is dit je kans!! 
        Schrijf je snel in via onderstaand formulier en misschien ben jij wel één van de 100 gelukkigen!
    </p>

    {{-- flex layout to grid layout for desktop and mobile compatibility --}}
    <div class="flex flex-col justify-center md:grid grid-rows-3 grid-flow-col gap-4">

        <div class="row-span-3 ">
            @include('partials._registration-form')
        </div>
        <div class="col-span-2 ">
            @include('partials._counter')
        </div>
        <div class="row-span-2 col-span-2 ">
            @include('partials._weather')
        </div>

    </div>
@endsection