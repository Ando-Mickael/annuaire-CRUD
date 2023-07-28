@extends('layout')

@section('title', 'Modifier')

@section('content')
    <form method="POST" action="/update/{{ $personne->id }}">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="inputNom">Nom</label>
            <input type="text" id="inputNom" class="form-control" name="nom" value="{{ $personne->nom }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputEmail">Email</label>
            <input type="email" id="inputEmail" class="form-control" name="email" value="{{ $personne->email }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputNumero">Numero</label>
            <input type="text" id="inputNumero" class="form-control" name="numero" value="{{ $personne->numero }}">
        </div>
        <button type="submit" class="btn btn-outline-primary">Modifier</button>
    </form>
@endsection
