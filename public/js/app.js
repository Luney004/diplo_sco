var next_click=document.querySelectorAll(".next_button");
var main_form=document.querySelectorAll(".main");
var step_list = document.querySelectorAll(".progress-bar li");
var num = document.querySelector(".step-number");
let formnumber=0;

next_click.forEach(function(next_click_form){
    next_click_form.addEventListener('click',function(){
        if(!validateform()){
            return false
        }
       formnumber++;
       updateform();
       progress_forward();
       contentchange();
    });
});

var back_click=document.querySelectorAll(".back_button");
back_click.forEach(function(back_click_form){
    back_click_form.addEventListener('click',function(){
       formnumber--;
       updateform();
       progress_backward();
       contentchange();
    });
});

var username=document.querySelector("#user_name");
var shownname=document.querySelector(".shown_name");


var submit_click=document.querySelectorAll(".submit_button");
submit_click.forEach(function(submit_click_form){
    submit_click_form.addEventListener('click',function(){
       shownname.innerHTML= username.value;
       formnumber++;
       updateform();
    });
});

function updateform(){
    main_form.forEach(function(mainform_number){
        mainform_number.classList.remove('active');
    })
    main_form[formnumber].classList.add('active');
}

function progress_forward(){
    // step_list.forEach(list => {

    //     list.classList.remove('active');

    // });


    num.innerHTML = formnumber+1;
    step_list[formnumber].classList.add('active');
}

function progress_backward(){
    var form_num = formnumber+1;
    step_list[form_num].classList.remove('active');
    num.innerHTML = form_num;
}

var step_num_content=document.querySelectorAll(".step-number-content");

 function contentchange(){
     step_num_content.forEach(function(content){
        content.classList.remove('active');
        content.classList.add('d-none');
     });
     step_num_content[formnumber].classList.add('active');
 }


function validateform(){
    validate=true;
    var validate_inputs=document.querySelectorAll(".main.active input");
    validate_inputs.forEach(function(vaildate_input){
        vaildate_input.classList.remove('warning');
        if(vaildate_input.hasAttribute('require')){
            if(vaildate_input.value.length==0){
                validate=false;
                vaildate_input.classList.add('warning');
            }
        }
    });
    return validate;

}

//variables à récupérer
const niveau = document.getElementById('lvl');
const mois_obt = document.getElementById('mois');
const annee_obt = document.getElementById('annee');
const prenom = document.getElementById('prenom');
const nom = document.getElementById('nom');
const sexe = document.getElementById('genre');
const date_naissance = document.getElementById('date_nais');
const lieu_naissance = document.getElementById('lieu_nais');
const serie = document.getElementById('serie');
const centre_ecrit = document.getElementById('centre_ecrit');
const num_table = document.getElementById('num_table');
const prenomd = document.getElementById('prenom_dem');
const nomd = document.getElementById('nom_dem');
const num_tel = document.getElementById('num_tel');
const mail_address = document.getElementById('mail');
const lieu_resid = document.getElementById('lieu_residence');
const lieu_ret = document.getElementById('lieu_retrait');

//variables à afficher
const out1 = document.getElementById('output1');
const out2 = document.getElementById('output2');
const out3 = document.getElementById('output3');
const out4 = document.getElementById('output4');
const out5 = document.getElementById('output5');
const out6 = document.getElementById('output6');
const out7 = document.getElementById('output7');
const out8 = document.getElementById('output8');
const out9 = document.getElementById('output9');
const out10 = document.getElementById('output10');
const out11 = document.getElementById('output11');
const out12 = document.getElementById('output12');
const out13 = document.getElementById('output13');
const out14 = document.getElementById('output14');
const out15 = document.getElementById('output15');


function ajouter(){
    out1.innerHTML = niveau.value;
    out2.innerHTML = mois_obt.value +' '+ annee_obt.value;
    out3.innerHTML = prenom.value;
    out4.innerHTML = nom.value;
    out5.innerHTML = sexe;
    out6.innerHTML = date_naissance.value;
    out7.innerHTML = lieu_naissance.value;
    out8.innerHTML = serie.value;
    out9.innerHTML = centre_ecrit.value;
    out10.innerHTML = num_table.value;
    out11.innerHTML = prenomd.value;
    out12.innerHTML = nomd.value;
    out13.innerHTML = num_tel.value;
    out14.innerHTML = lieu_resid.value;
    out15.innerHTML = lieu_ret.value;

}

var next_btn2 = document.querySelector('#next_btn2');
next_btn2.addEventListener('click',ajouter);


