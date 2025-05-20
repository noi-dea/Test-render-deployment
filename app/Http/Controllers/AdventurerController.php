<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adventurer;


class AdventurerController extends Controller
{
    //

    public function index(){
        $adventurers = Adventurer::all();
        return response()->json($adventurers);
    }


     public function store(Request $request){
        $adventurer = new Adventurer;

        $adventurer->charName = $request->name;
        $adventurer->role = $request->role;
        $adventurer->race = $request->race;
        $adventurer->rank = $request->rank;
        $adventurer->portrait = $request->portrait;
        $adventurer->sprites = $request->sprites;
        $adventurer->description = $request->description;

        $adventurer->save();

        return redirect('/adventurers');
    }
}
