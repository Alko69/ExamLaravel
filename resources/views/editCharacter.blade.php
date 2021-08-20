@extends('layouts.base')
@section('css', 'adding')

@section('title', 'Edit Perso')

@section('content')

<h1>Edit</h1>
<div id="form">
    <form action=editCharacter method="POST" id="form1" class="gradient">
    @csrf
        <input type="hidden" name="id" value="{{ $characters->id }}">
        <div class="write">
            <label for="name">Nom du personnage</label>
            <input type="text" name="name">
        </div>
        <div class="write">
            <label for="creation_year">Date de création</label>
            <input type="number" name="creation_year">
        </div>
        <div class="write">
            <label for="cartoonist">Dessinateur</label>
            <select type ="text" name="cartoonist_id">
                @foreach ($cartoonists as $cartoonist)
                    <option value="{{$cartoonist->id}}">{{$cartoonist->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="write">
            <label for="comic">Bande dessinée</label>
            <input type="text" name="comic">
        </div>
    </form>
    <button type="submit" form="form1" id="sub">Soumettre</button>
</div>
@endsection