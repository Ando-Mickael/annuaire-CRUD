@extends('layout')

@section('title', 'Liste des personnes')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Numero</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personnes as $personne)
                <tr>
                    <td>{{ $personne->id }}</td>
                    <td><a href="{{ '/profil/' . $personne->id }}">{{ $personne->nom }}</a></td>
                    <td>{{ $personne->email }}</td>
                    <td>{{ $personne->numero }}</td>
                    <td>
                        <a href="/delete/{{ $personne->id }}">
                            <button class="btn btn-outline-danger">Supprimer</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/add-person">
        <button class="btn btn-primary">Ajouter une personne</button>
    </a>
@endsection
