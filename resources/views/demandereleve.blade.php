@extends('layouts.layout.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="form">
            <div class="left-side">
                <div class="left-heading">
                    <h3>Demande de duplicata de relevé</h3>
                </div>
                <div class="steps-content">
                    <h3>Step <span class="step-number">1</span></h3>
                    <p class="step-number-content active">Enter your personal information to get closer to companies.</p>
                    <p class="step-number-content d-none">Get to know better by adding your diploma,certificate and education life.</p>
                    <p class="step-number-content d-none">Help companies get to know you better by telling then about your past experiences.</p>
                    <p class="step-number-content d-none">Add your profile piccture and let companies find youy fast.</p>
                </div>
                <ul class="progress-bar">
                    <li class="active">Personal Information</li>
                    <li>Education</li>
                    <li>Work Experience</li>
                    <li>User Photo</li>
                </ul>



            </div>
            <div class="right-side">
                <div class="main active">
                    <small><i class="fa fa-smile-o"></i></small>
                    <div class="text">
                        <h2>Your Personal Information</h2>
                        <p>Enter your personal information to get closer to companies.</p>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <label for="niveau"> Niveau </label>
                            <select name="level" id="lvl">
                                <option value="cepd">CEPD</option>
                                <option value="bepc">BEPC</option>
                                <option value="bac">BAC I</option>
                                <option value="prof" title="CAM, CEAP, CAP, CAP-CEG">Professionnels</option>
                            </select>
                        </div>
                        <div class="input-div">
                            <label for="year"> Session </label> <br>
                            <input type="date" id="year" required require>
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <label for="prenom"> Prénoms </label>
                            <input type="text" placeholder="Koffi" required require>
                        </div>
                        <div class="input-div">
                            <label for="nom"> Nom </label>
                            <input type="text" placeholder="AKAKPO" required require>
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <label for="sexe"> Sexe </label>
                            <select>
                                <option>Masculin</option>
                                <option>Feminin</option>
                            </select>
                        </div>
                        <div class="input-div">
                            <label for="serie"> Série </label>
                            <select>
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
                            <label for="num_table"> Numéro de Table </label>
                            <input type="number" required require>
                        </div>
                    </div>
                    <div class="buttons">
                        <button class="next_button">Next Step</button>
                    </div>
                </div>
                <div class="main">
                    <small><i class="fa fa-smile-o"></i></small>
                    <div class="text">
                        <h2>Education</h2>
                        <p>Inform companies about your education life.</p>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <input type="text" required require>
                            <span>School Name</span>
                        </div>
                        <div class="input-div">
                            <input type="text" required>
                            <span>Board Name</span>
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <input type="text" required require>
                            <span>College/University name</span>
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <select>
                                <option>Select Course</option>
                                <option>BCA</option>
                                <option>B-TECH</option>
                                <option>BA</option>
                                <option>B-COM</option>
                                <option>B-SC</option>
                                <option>MBA</option>
                                <option>MCA</option>
                                <option>M-COM</option>
                                <option>M-TECH</option>
                            </select>
                        </div>
                    </div>
                    <div class="buttons button_space">
                        <button class="back_button">Back</button>
                        <button class="next_button">Next Step</button>
                    </div>
                </div>
                <div class="main">
                    <small><i class="fa fa-smile-o"></i></small>
                    <div class="text">
                        <h2>Work Experiences</h2>
                        <p>Can you talk about your past work experience?</p>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <input type="text" required require>
                            <span>Experience 1</span>
                        </div>
                        <div class="input-div">
                            <input type="text" required require>
                            <span>Position</span>
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <input type="text" required>
                            <span>Experience 2</span>
                        </div>
                        <div class="input-div">
                            <input type="text" required>
                            <span>Position</span>
                        </div>
                    </div>
                    <div class="input-text">
                        <div class="input-div">
                            <input type="text" required>
                            <span>Experience 3</span>
                        </div>
                        <div class="input-div">
                            <input type="text" required>
                            <span>Position</span>
                        </div>
                    </div>
                    <div class="buttons button_space">
                        <button class="back_button">Back</button>
                        <button class="next_button">Next Step</button>
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
                        <button class="back_button">Back</button>
                        <button class="submit_button">Submit</button>
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

