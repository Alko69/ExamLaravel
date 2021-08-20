@extends('layouts.base')
@section('css', 'adding')

@section('title', 'Edit Perso')

@section('content')

<h1>Edit</h1>
<div id="form">
    <form action=editCartoonist method="POST" id="form1" class="gradient">
    @csrf
    <input type="hidden" name="id" value="{{ $cartoonist->id }}">
        <div class="write">
            <label for="name">Nom</label>
            <input type="text" name="name">
        </div>
        <div class="write">
            <label for="nationality">Nationalité</label>
            <input type="text" name="nationality">
        </div>
        <div class="write">
            <label for="birth_year">Année de naissance</label>
            <input type="number" name="birth_year">
        </div>
    </form>
    <button type="submit" form="form1" id="sub">Soumettre</button>
</div>
@endsection