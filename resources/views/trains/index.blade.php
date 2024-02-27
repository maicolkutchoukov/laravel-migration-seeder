@extends('layouts.app')

@section('page-title', 'Tutti i treni')

@section('main-content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione di Partenza</th>
            <th scope="col">Stazione di Arrivo</th>
            <th scope="col">Orario di Partenza</th>
            <th scope="col">Orario di Arrivo</th>
            <th scope="col">Codice del treno</th>
            <th scope="col">Numero carrozze</th>
            <th scope="col">Ritardo</th>
            <th scope="col">Stato</th>
        </tr>
    </thead>
        @foreach ($trains as $index => $train)
            <tbody>
                <tr>
                    <td>{{ $train->agency }}</td>
                    <td>{{ $train->station_start }}</td>
                    <td>{{ $train->station_end }}</td>
                    <td>{{ $train->time_start }}</td>
                    <td>{{ $train->time_end }}</td>
                    <td>{{ $train->code }}</td>
                    <td>{{ $train->carriages }}</td>
                    @if ($train->in_time)
                        <td>In Orario</td>
                    @else 
                        <td>In Ritardo</td>  
                    @endif
                    @if ($train->cancelled)
                        <td>Ok</td>
                    @else 
                        <td>Cancellato</td>
                    @endif
                </tr>
            </tbody>
        @endforeach
    </table>
    

@endsection