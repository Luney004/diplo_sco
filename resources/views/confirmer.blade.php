@extends('layouts.layout.app')

@section('content')

<div class="container">
    <div class="card">
            <div class="form">
                <div class="left-side">
                    <div class="left-heading">
                        <h3>Demande de diplôme </h3>
                    </div>
                    <div class="steps-content">
                        <h3>Step <span class="step-number">3</span></h3>
                        <p class="step-number-content d-none">Enter your personal information to get closer to companies.</p>
                        <p class="step-number-content d-none">Get to know better by adding your diploma,certificate and education life.</p>
                        <p class="step-number-content active">Help companies get to know you better by telling then about your past experiences.</p>
                        <p class="step-number-content d-none">Add your profile piccture and let companies find youy fast.</p>
                    </div>
                    <ul class="progress-bar">
                        <li class="active">Personal Information</li>
                        <li>Education</li>
                        <li>Information</li>
                        <li>Payment</li>
                    </ul>
                </div>
                <div class="right-side">

                    <div class="main active">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Work Experiences</h2>
                            <p>Can you talk about your past work experience?</p>
                        </div>
                        <div class="input-text">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th scope="row" width="30">Niveau</th>
                                                <td width="70">

                                                 </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Session</th>
                                                <td>a</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Prénoms</th>
                                                <td>a</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nom</th>
                                                <td>a</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Sexe</th>
                                                <td>a</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Série</th>
                                                <td>a</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Numéro de Table</th>
                                                <td>a</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Prénoms du demandeur</th>
                                                <td>a</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nom du demandeur</th>
                                                <td>a</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Numéro de Téléphone</th>
                                                <td>a</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="buttons button_space">
                            <button class="back_button">Précédent</button>
                            <button class="next_button">Suivant</button>
                        </div>
                    </div>


                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>User Photo</h2>
                            <p>Upload your profile picture and share yourself.</p>
                        </div>
                        <div class="user_card">
                            <span></span>
                            <div class="circle">
                                <span><img src="https://i.imgur.com/hnwphgM.jpg"></span>

                            </div>
                            <div class="social">
                                <span><i class="fa fa-share-alt"></i></span>
                                <span><i class="fa fa-heart"></i></span>

                            </div>
                            <div class="user_name">
                                <h3>Peter Hawkins</h3>
                                <div class="detail">
                                    <p><a href="#">Izmar,Turkey</a>Hiring</p>
                                    <p>17 last day . 94Apply</p>
                                </div>
                            </div>
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
            </div>
    </div>
</div>

@endsection
