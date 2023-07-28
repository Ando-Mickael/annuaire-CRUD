@extends('layout')

@section('title', 'Ajouter une personne')

@section('content')
    <form method="POST" action="/create">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="inputNom">Nom</label>
            <input type="text" id="inputNom" class="form-control" name="nom" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputEmail">Email</label>
            <input type="email" id="inputEmail" class="form-control" name="email" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputNumero">Numero</label>
            <input type="text" id="inputNumero" class="form-control" name="numero" />
        </div>
        <button type="submit" class="btn btn-outline-primary">Ajouter</button>
    </form>
@endsection
