<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cartoonist;
use App\Models\Character;

class ActionController extends Controller
{
    public function addCharacter(Request $request) 
    {
        $character = new Character;
        $character->name = $request->name;
        $character->comic = $request->comic;
        $character->creation_year = $request->creation_year;
        $character->cartoonist = $request->cartoonist;
        $character->save();
        return redirect('characters');  //redirige sur une route
    }

    public function addCartoonist(Request $request) 
    {
        $cartoonist = new Cartoonist;
        $cartoonist->name = $request->name;
        $cartoonist->nationality = $request->nationality;
        $cartoonist->birth_year = $request->birth_year;
        $cartoonist->save();
        return redirect('cartoonists');  //redirige sur une route
    }

    public function deleteCharacter(Request $request)
    {
        $character = Character::findOrFail($request->id);
        dd($character);
        $character->delete();
        return redirect('characters');
    }

    public function deleteCartoonist(Request $request)
    {
        $cartoonist = Cartoonist::findOrFail($request->id);
        $cartoonist->delete();
        return redirect('cartoonists');
    }

    public function editCharacter(Request $request)
    {
        $characters = Character::find($request->id);
        $characters->name = $request->name;
        $characters->creation_year = $request->creation_year;
        $characters->cartoonist_id = $request->cartoonist_id;
        $characters->comic = $request->comic;
        $characters->save();
        return redirect('characters');
    }

    public function editCartoonist(Request $request)
    {
        $cartoonist = Cartoonist::find($request->id);
        $cartoonist->name = $request->name;
        $cartoonist->birth_year = $request->birth_year;
        $cartoonist->nationality = $request->nationality;
        $cartoonist->save();
        return redirect('cartoonists');
    }
}
