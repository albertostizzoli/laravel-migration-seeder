@extends('layouts.app')

@section('title')

@section('content')

    <main>
        <h1 class="text-center">Trains</h1>
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-12 col-md-3 col-lg-4">
                    <ul>
                        <li>Azienda:{{ $train->company }}</li>
                        <li>Stazione di partenza:{{ $train->departure_station }}</li>
                        <li>Stazione di arrivo:{{ $train->arrival_station }}</li>
                        <li>Orario di partenza:{{ $train->departure }}</li>
                        <li>Orario di arrivo:{{ $train->arrived }}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </main>
