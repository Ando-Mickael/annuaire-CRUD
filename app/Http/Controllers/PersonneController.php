<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonneController extends Controller
{
    function index()
    {
        // $personnes = Personne::all();
        $personnes = DB::table("personne")->get();

        return view("persons", ["personnes" => $personnes]);
    }

    function profil($id)
    {
        // $personne = Personne::findOrFail($id);
        $personne = DB::table("personne")->find($id);

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
