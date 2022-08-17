<?php

namespace App\Http\Controllers;

use App\Models\Demandeur;
use App\Models\Diplome;
use Illuminate\Http\Request;

class DiplomeController extends Controller
{
    public function askdiplome()
    {

        return view("demandediplome");
    }
    public function askdiplomeSend(Request $request)
    {

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

        $demandeur = new Demandeur();

        $demandeur->prenom_dem = $request->prenom_dem;
        $demandeur->nom_dem = $request->nom_dem;
        $demandeur->num_tel = $request->num_tel;
        $demandeur->mail = $request->mail;
        $demandeur->lieu_residence = $request->lieu_residence;
        $demandeur->lieu_retrait = $request->lieu_retrait;

        $demandeur->save();



    }
}
