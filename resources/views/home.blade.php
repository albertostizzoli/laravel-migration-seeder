@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <h1 class="text-bg-danger text-center p-2">Stazione dei treni</h1>
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-primary p-3" {{ Route::currentRouteName() == 'trains.index' ? 'active' : '' }}
                        href="{{ route('trains.index') }}"> VAI AI TRENI</a>
                </div>
            </div>
        </div>

    </main>

@endsection
