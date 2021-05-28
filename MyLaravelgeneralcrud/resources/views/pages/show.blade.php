    @extends('layouts.main-layout')

    @section('content')
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h1>Match:</h1>
                    <h2>
                        @if($match -> result)
                            {{ $match -> team1 }}
                            -
                            <u>{{ $match -> team2 }}</u>
                        @else
                            <u>{{ $match -> team1 }}</u>
                            -
                            {{ $match -> team2 }}
                        @endif
                    </h2>
                    <p>Punteggio team1: {{ $match -> point1 }}</p>
                    <p>Punteggio team2: {{ $match -> point2 }}</p>
                    <p>Risultato: {{ $match -> result }}</p>
                </div>
            </div>
        </div>
    @endsection
