<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Match;

class TestController extends Controller
{
    public function home(){

        $matches = Match::all();

        return view('pages.home', compact(
            'matches'
        ));
    }

    public function show($id){

        $match = Match::findOrFail($id);


        return view('pages.show', compact(
            'match'
        ));
    }
    public function create(){

        return view('pages.create');
    }

    public function store(Request $request){

        $validData = $request -> validate ([               // consultare https://laravel.com/docs/7.x/validation
            'team1' => 'required|string|min:3|max:255',    // per scegliere la tipologia (string, integer, etc)
            'team2' => 'required|string|min:3|max:255',
            'point1' => 'required|integer|min:0|max:100',
            'point2' => 'required|integer|min:0|max:100',
            'result' => 'required|boolean',
        ]);
        $match = Match::create($validData);
        return redirect() -> route('show', $match -> id);
    }

    public function edit($id){

        $match = Match::findOrFail($id);
        return view('pages.edit', compact(
            'match'
        ));
    }

    public function update(Request $request, $id){

        $validData = $request -> validate ([
            'team1' => 'required|string|min:3|max:255',
            'team2' => 'required|string|min:3|max:255',
            'point1' => 'required|integer|min:0|max:100',
            'point2' => 'required|integer|min:0|max:100',
            'result' => 'required|boolean',
        ]);

        $match = Match::findOrFail($id);
        $match -> update($validData);
        return redirect() -> route('show', $match -> id);
    }

    public function destroy($id){

        $match = Match::findOrFail($id);

        $match -> delete();

        return redirect() -> route('home');

    }
}
