<x-card class="p-10 max-w-lg mx-auto mt-10">
    <h2>Hey! {{ $data['name'] }}, Je registratie is gelukt! Dank je wel voor je deelname!</h2>

    <h3>Details van inschrijving:</h3>
    <h3>Email: </h3><p>{{$data['email']}}</p>
    <h3>Kenteken: </h3><p>{{$data['numberplate']}}</p>

    <h2>Tot snel!</h2>

    <p>groetjes, Team Circuit Zandvoort</p>
</x-card>
