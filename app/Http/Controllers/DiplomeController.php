<?php

namespace App\Http\Controllers;

use App\Models\Diplome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DiplomeController extends Controller
{
    public function askdiplome()
    {

        return view("demandediplome");
    }
    public function askdiplomeSend(Request $request)
    {

        Session::put('niveau', $request->niveau);
        Session::put('mois_obt', $request->mois_obt);
        Session::put('annee_obt', $request->annee_obt);
        Session::put('serie', $request->serie);
        Session::put('prenom', $request->prenom);
        Session::put('nom', $request->nom);
        Session::put('sexe', $request->sexe);
        Session::put('num_table', $request->num_table);


        $diplome = new Diplome();

        $diplome->niveau = $request->niveau;
        $diplome->mois_obt = $request->mois_obt;
        $diplome->annee_obt = $request->annee_obt;
        $diplome->serie = $request->serie;
        $diplome->prenom = $request->prenom;
        $diplome->nom = $request->nom;
        $diplome->sexe = $request->sexe;
        $diplome->num_table = $request->num_table;

        $diplome->save();






       // return view("confirmer");

    }
}
