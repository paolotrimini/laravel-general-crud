    @extends('layouts.main-layout')

    @section('content')

        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1>New Teams</h1>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('store') }}">

            @csrf
            @method('POST')

            {{-- team 1 --}}
            <div class="form-group row">
                <label for="team1" class="col-md-4 col-form-label text-md-right">Team 1</label>
                <div class="col-md-6">
                    <input id="team1" type="text" class="form-control" name="team1">
                </div>
            </div>
            {{-- team 2 --}}
            <div class="form-group row">
                <label for="team2" class="col-md-4 col-form-label text-md-right">Team 2</label>
                <div class="col-md-6">
                    <input id="team2" type="text" class="form-control" name="team2">
                </div>
            </div>
            {{-- point 1 --}}
            <div class="form-group row">
                <label for="point1" class="col-md-4 col-form-label text-md-right">Point 1</label>
                <div class="col-md-6">
                    <input id="point1" type="number" class="form-control" name="point1">
                </div>
            </div>
            {{-- point 2 --}}
            <div class="form-group row">
                <label for="point2" class="col-md-4 col-form-label text-md-right">Point 2</label>
                <div class="col-md-6">
                    <input id="point2" type="number" class="form-control" name="point2">
                </div>
            </div>
            {{-- result --}}
            <div class="form-group row">
                <label for="result" class="col-md-4 col-form-label text-md-right">Result</label>
                <div class="col-md-6">
                    <input id="result" type="number" class="form-control" name="result">
                </div>
            </div>

            {{-- BUTTON --}}
            <div class="form-group row">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">
                        CREATE
                    </button>
                </div>
            </div>
        </form>
    @endsection
