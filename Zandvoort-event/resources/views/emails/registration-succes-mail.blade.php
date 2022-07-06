{{-- Layout for mail: successful registration --}}
<x-card class="p-10 max-w-lg mx-auto mt-10">
    <h2>Hey! {{ $data['name'] }}, Je registratie is gelukt! Dank je wel voor je deelname!</h2>

    <p>Mocht jij één van de gelukkigen zijn die met je auto mee mag racen tijdens de zandvoort personenauto race, 
        dan brengen we je zo snel mogelijk op de hoogte!</p>

    <h3>Details van inschrijving:</h3>
    <h3>Email: </h3><p>{{$data['email']}}</p>
    <h3>Kenteken: </h3><p>{{$data['numberplate']}}</p>

    <p>groetjes, Team Circuit Zandvoort</p>
</x-card>
