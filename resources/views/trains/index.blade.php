@extends('layouts.app')

@section('title')

@section('content')
    <h1 class="text-center text-bg-danger p-2">Treni</h1>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table mt-4">
                        <thead>
                            <tr class="table-danger">
                                <th>Azienda</th>
                                <th>Stazione di partenza</th>
                                <th>Stazione di arrivo</th>
                                <th>Orario di partenza</th>
                                <th>Orario di arrivo</th>
                                <th>Codice Treno</th>
                                <th>Numero Carrozze</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trains as $train)
                                <tr class="table-light">
                                    <th>{{ $train->company }}</th>
                                    <td>{{ $train->departure_station }}</td>
                                    <td>{{ $train->arrival_station }}</td>
                                    <td>{{ $train->departure }}</td>
                                    <td>{{ $train->arrived }}</td>
                                    <td>{{ $train->train_code }}</td>
                                    <td>{{ $train->number_carriages }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
