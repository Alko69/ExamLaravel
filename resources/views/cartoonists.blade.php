@extends('layouts.base')

@section('title')
Dessinateur
@endsection

@section('css', 'characters')

@section('content')
<h1>Dessinateurs</h1>

<table>
    <tr>
        <th>N°</th>
        <th>Nom</th>
        <th>Nationalité</th>
        <th>Année de naissance</th>
        <th>Supprimer</th>
        <th>Modifier</th>
    </tr>
    @foreach ($cartoonists as $cartoonist)
    <tr>
        <td>{{$cartoonist->id}}</td>
        <td>{{$cartoonist->name}}</td>
        <td>{{$cartoonist->nationality}}</td>
        <td>{{$cartoonist->birth_year}}</td>
        <td>
            <form action="deleteCartoonist" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$cartoonist->id}}">
                <input type="submit" value="Delete">
            </form>
        </td>
        <td>
            <form action="editCartoonist" method="GET">
                @csrf
                <input type="hidden" name="id" value="{{$cartoonist->id}}">
                <input type="submit" value="Edit">
            </form>
        </td>
    </tr>
        
    @endforeach
</table>
@endsection