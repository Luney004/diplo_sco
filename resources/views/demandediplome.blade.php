@extends('layouts.app')

@section('content')


<div class="container">
    <div class="card">
            <form action="" method="POST" class="form" >
                @csrf
                <div class="left-side">
                    <div class="left-heading">
                        <h3>Demande de diplôme </h3>
                    </div>
                    <div class="steps-content">
                        <h3>ETAPE <span class="step-number">1</span></h3>
                        <p class="step-number-content active"> Saisissez les informations, puis ajoutez les pièces demandées.</p>
                        <p class="step-number-content d-none">Renseignez les informations de contact du demandeur.</p>
                        <p class="step-number-content d-none">Confirmez les informations saisies.</p>
                        <p class="step-number-content d-none">Payez par Mobile Money ou par carte bancaire.</p>
                    </div>
                    <ul class="progress-bar">
                        <li class="active">Informations </li>
                        <li>Contact du demandeur</li>
                        <li>Confirmation</li>
                        <li>Paiement</li>
                    </ul>
                </div>
                <div class="right-side">
                        <div class="main active">
                            <div class="text">
                                <h2>Saisie des informations</h2>
                                <p>Saisissez les informations, et ajoutez les pièces demandées.</p>
                                <span class="directive">* Champs Obligatoires</span> <br>
                            </div>
                            <div class="add-file">
                                    <div class="input-div">
                                        <label> Pièces  <sup>*</sup>: </label>
                                        <div class="text-file">
                                            <h2 class="file_text">
                                                <span>Glisser déposer</span>
                                                <span>ou</span>
                                            </h2>
                                            <input class="file_button" name="fichier" type="file" accept=".pdf, .png, .jpeg, .jpg" multiple required require>
                                        </div>
                                    </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <label> Niveau <sup>*</sup> </label>
                                    <select name="niveau" id="lvl">
                                        <option value="Null"> Selectionner </option>
                                        <option value="CEPD">CEPD</option>
                                        <option value="BEPC">BEPC</option>
                                        <option value="BAC I">BAC I</option>
                                    </select>
                                </div>
                                <div class="input-div">
                                    <label> Mois d'obtention  <sup>*</sup> </label> <br>
                                    <select name="mois_obt" id="mois">
                                        <option value="Janvier"> Janvier </option>
                                        <option value="Février"> Février </option>
                                        <option value="Mars"> Mars </option>
                                        <option value="Avril"> Avril </option>
                                        <option value="Mai"> Mai </option>
                                        <option value="Juin"> Juillet </option>
                                        <option value="Août"> Août </option>
                                        <option value="Septembre"> Septembre </option>
                                        <option value="Octobre"> Octobre </option>
                                        <option value="Novembre"> Novembre </option>
                                        <option value="Décembre"> Décembre </option>
                                    </select>
                                </div>
                                <div class="input-div">
                                    <label> Année d'obtention <sup>*</sup> </label> <br>
                                    <input type="year" name="annee_obt" id="annee" placeholder="XXXX" required require>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <label for="prenom"> Prénoms <sup>*</sup> </label>
                                    <input type="text" name="prenom" id="prenom" placeholder="Koffi" required require>
                                </div>
                                <div class="input-div">
                                    <label for="nom"> Nom <sup>*</sup> </label>
                                    <input type="text" name="nom" id="nom" placeholder="AKAKPO"  required require>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <label for="sexe"> Sexe <sup>*</sup> </label>
                                    <select name="sexe" id="genre">
                                        <option value="Null"> Selectionner </option>
                                        <option value="M">Masculin</option>
                                        <option value="F">Feminin</option>
                                    </select>
                                </div>
                                <div class="input-div">
                                    <label> Date de Naissance <sup>*</sup> </label> <br>
                                    <input name="date_naissance" type="date" id="date_nais" required require>
                                </div>
                                <div class="input-div">
                                    <label> Lieu de Naissance <sup>*</sup> </label>
                                    <input type="text" name="lieu_naissance" id="lieu_nais" required require>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <label> Série <sup>*</sup> </label>
                                    <select name="serie" id="serie">
                                        <option value="Null"> Selectionner </option>
                                        <option value="A4">A4</option>
                                        <option value="D">D</option>
                                        <option value="C">C</option>
                                        <option value="F1">F1</option>
                                        <option value="F2">F2</option>
                                        <option value="F1">F3</option>
                                        <option value="F4">F4</option>
                                        <option value="E">E</option>
                                        <option value="Ti/1">Ti/1</option>
                                        <option value="G1">G1</option>
                                        <option value="G2">G2</option>
                                        <option value="G3">G3</option>
                                    </select>
                                </div>
                                <div class="input-div">
                                    <label> Centre d'écrit <sup>*</sup> </label>
                                    <input type="text" name= "centre_ecrit" id="centre_ecrit" required require>
                                </div>
                                <div class="input-div">
                                    <label for="num_table"> Numéro de Table <sup>*</sup> </label>
                                    <input type="number" name="num_table" id="num_table" required require>
                                </div>
                            </div>
                            <div class="buttons">
                                <button class="next_button">Suivant</button>
                            </div>
                        </div>

                        <div class="main">
                            <small><i class="fa fa-smile-o"></i></small>
                            <div class="text">
                                <h2>Entrée des informations du demandeur</h2>
                                <p>Renseignez les informations de contact du demandeur.</p>
                            </div>
                            <p class="directive">* Champs Obligatoires</p>
                            <div class="input-text">
                                <div class="input-div">
                                    <label for="prenom_demande"> Prénoms du demandeur <sup>*</sup> </label>
                                    <input type="text" name="prenom_dem" id="prenom_dem" placeholder="Koffi" required require>
                                </div>
                                <div class="input-div">
                                    <label for="nom_demande"> Nom du demandeur <sup>*</sup> </label>
                                    <input type="text" name="nom_dem" id="nom_dem" placeholder="AKAKPO" required require>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <label for="num_tel"> Numéro de Téléphone <sup>*</sup> </label>
                                    <input type="tel" name="num_tel" id="num_tel" required require>
                                </div>
                                <div class="input-div">
                                    <label for="mail"> Adresse mail </label>
                                    <input type="mail" name="mail" id="mail">
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <label> Lieu de résidence <sup>*</sup> </label>
                                    <input type="text" name="lieu_residence" id="lieu_residence" required require>
                                </div>
                                <div class="input-div">
                                    <label>Lieu de retrait <sup>*</sup></label>
                                    <select name="lieu_retrait" id="lieu_retrait">
                                        <option value="Null"> Selectionner </option>
                                        <option value="DRE-Savanes">DRE-Savanes (Dapaong)</option>
                                        <option value="DRE-Kara">DRE-Kara (Kara)</option>
                                        <option value="DRE-Centrale">DRE-Centrale (Sokodé)</option>
                                        <option value="DRE-Plateau Est">DRE-Plateau Est (Atakpamé)</option>
                                        <option value="DRE-Plateau Ouest">DRE-Plateau Ouest (Kpalimé)</option>
                                        <option value="DRE-Maritime">DRE-Maritime (Tsevié)</option>
                                        <option value="DRE-Golfe">DRE-Golfe (Lomé)</option>
                                        <option value="DECC">Direction des Examens, Concours et Certifications</option>
                                        <option value="Poste">La Poste</option>
                                    </select>
                                </div>
                            </div>

                            <div class="buttons button_space">
                                <button class="back_button">Précédent</button>
                                <button id="next_btn2" class="next_button">Suivant</button>
                            </div>
                        </div>

                        <div class="main">
                            <small><i class="fa fa-smile-o"></i></small>
                            <div class="text">
                                <h2>Confirmation des informations saisies</h2>
                                <p>Confirmez les informations saisies.</p>
                            </div>
                            <p class="directive">* Champs Obligatoires</p>
                            <div class="input-text">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <table class="table">
                                            <tbody >
                                                <tr>
                                                    <th scope="row" width="30">Niveau</th>
                                                    <td width="70" id="output1"> </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Session</th>
                                                    <td>{{ Session::get('mois_obt') }} {{ Session::get('annee_obt') }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Prénoms</th>
                                                    <td id="output3"></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Nom</th>
                                                    <td>{{ Session::get('nom') }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Sexe</th>
                                                    <td>{{ Session::get('sexe') }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Série</th>
                                                    <td>{{ Session::get('serie') }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Numéro de Table</th>
                                                    <td>{{ Session::get('num_table') }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Prénoms du demandeur</th>
                                                    <td>{{ Session::get('niveau') }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Nom du demandeur</th>
                                                    <td>{{ Session::get('niveau') }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Numéro de Téléphone</th>
                                                    <td>{{ Session::get('niveau') }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="buttons button_space">
                                <button class="back_button">Précédent</button>
                                <button type="submit" class="next_button">Suivant</button>
                            </div>
                        </div>

                        <div class="main">
                            <small><i class="fa fa-smile-o"></i></small>
                            <div class="text">
                                <h2>Effectuez le paiement</h2>
                                <p>Payez par Mobile Money ou par carte bancaire.</p>
                            </div>
                            <p class="directive">* Champs Obligatoires</p>
                            <div class="user_card">
                                <span> Payer <sup>*</sup> </span>
                                <input type="text" required require>
                            </div>
                            <div class="buttons button_space">
                                <button class="back_button">Précédent</button>
                                <button type="submit" class="submit_button">Soumettre</button>
                            </div>
                        </div>


                        <div class="main">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                            </svg>

                            <div class="text congrats">
                                <h2>Congratulations!</h2>
                                <p>Thanks Mr./Mrs. <span class="shown_name"></span> your information have been submitted successfully for the future reference we will contact you soon.</p>
                            </div>
                        </div>
                </div>
            </form>
    </div>
</div>
@endsection

