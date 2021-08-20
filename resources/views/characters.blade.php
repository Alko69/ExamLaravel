@extends('layouts.base')

@section('title')
Personnages
@endsection

@section('css', 'characters')

@section('content')
<h1>Liste de Personnages</h1>

<table>
    <tr>
        <th>N°</th>
        <th>Nom</th>
        <th>Dessinateur</th>
        <th>Date de création</th>
        <th>BD affiliée</th>
        <th>Supprimer</th>
        <th>Modifier</th>
    </tr>
    @foreach ($characters as $character)
    <tr>
        <td>{{$character->id}}</td>
        <td>{{$character->name}}</td>
        <td>{{$character->cartoonist->name}}</td>
        <td>{{$character->creation_year}}</td>
        <td>{{$character->comic}}</td>
        <td>
            <form action="deleteCharacter" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$character->id}}">
                <input type="submit" value="Delete">
            </form>
        </td>
        <td>
            <form action="editCharacter" method="GET">
                @csrf
                <input type="hidden" name="id" value="{{$character->id}}">
                <input type="submit" value="Edit">
            </form>
        </td>
    </tr>
        
    @endforeach
</table>

@endsection