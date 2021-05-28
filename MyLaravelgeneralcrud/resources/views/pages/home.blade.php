    @extends('layouts.main-layout')

    @section('content')
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h2>Matches:</h2>
                    <ul>
                        @foreach($matches as $match)
                            <li>
                                <a href="{{ route('show', $match -> id) }}">
                                    <p class="icons">
                                        {{ $match -> team1 }} - {{ $match -> team2 }}
                                        <a href="{{ route('edit', $match -> id) }}">
                                            &#9998;
                                        </a>
                                        <a href="{{ route('destroy', $match -> id) }}">
                                            &#10007;
                                        </a>
                                    </p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endsection
