<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    function index()
    {
        return view("persons", ["personnes" => Personne::all()]);
    }

    function profil($id)
    {
        $personne = Personne::findOrFail($id);
        return view("person", ["personne" => $personne]);
    }

    function toAddPerson()
    {
        return view("add-person");
    }

    function create(Request $request)
    {
        $newPersonne = new Personne();
        $newPersonne->nom = $request->input("nom");
        $newPersonne->email = $request->input("email");
        $newPersonne->numero = $request->input("numero");
        $newPersonne->save();

        return redirect("/");
    }

    function delete($id)
    {
        $personneToDelete = Personne::findOrFail($id);
        $personneToDelete->delete();

        return redirect("/");
    }

    function update(Request $request, $id)
    {
        $personneToUpdate = Personne::findOrFail($id);
        $personneToUpdate->nom = $request->input("nom");
        $personneToUpdate->email = $request->input("email");
        $personneToUpdate->numero = $request->input("numero");
        $personneToUpdate->save();

        return redirect("/");
    }
}
