<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Cartoonist;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function characters()
    {
        $characters  = Character::all();
        return view('characters', ['characters' => $characters]); 
    }

    public function cartoonists()
    {
        $cartoonists = Cartoonist::all();
        return view('cartoonists', ['cartoonists' => $cartoonists]);
    }

    public function addCharacter()
    {
        $cartoonists = Cartoonist::all()->sortBy('name');
        return view('addCharacter', ['cartoonists' => $cartoonists]);
    }

    public function addCartoonist()
    {
        return view('addCartoonist');
    }

    public function editCharacter(Request $request)
    {
        $characters = Character::findOrFail($request->id);
        $cartoonists = Cartoonist::all()->sortBy('name');
        return view('editCharacter', ['characters' => $characters, 'cartoonists' => $cartoonists]);
    }

    public function editCartoonist(Request $request)
    {
        $cartoonist = Cartoonist::findOrFail($request->id);
        return view('editCartoonist', ['cartoonist' => $cartoonist]);
    }
}
