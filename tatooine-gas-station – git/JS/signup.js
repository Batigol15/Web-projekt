
var realname=document.getElementById('realname');
var realnamespan=document.getElementById('realnamespan');
var realsurname=document.getElementById('realsurname');
var realsurnamespan=document.getElementById('realsurnamespan');
var username=document.getElementById('username');
var usernamespan=document.getElementById('usernamespan');
var userpassword=document.getElementById('userpassword');
var userpasswordspan=document.getElementById('userpasswordspan');
var passwordrep=document.getElementById('passwordrep');
var passwordrepspan=document.getElementById('passwordrepspan');
var useremail=document.getElementById('useremail');
var useremailspan=document.getElementById('useremailspan');

function emailKontrola(){
    var mailformat= /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})+$/;

    if(useremail.value.match(mailformat)){
        useremailspan.innerHTML="";
        useremail.style.border="1px solid #00ff00";
    }
    else{
        useremailspan.innerHTML="Molimo unesite validnu email adresu.";
        useremailspan.style.color="#ff0000";
        useremail.style.border="1px solid #ff0000";
    }
}

function nameKontrola(){
    if (realname.value=="" || realname.value.length<=2 ){
        realnamespan.innerHTML="Unesite vise od 2 znaka. Hvala!";
        realnamespan.style.color="#ff0000";
        realname.style.border="1px solid #ff0000";
    }

    else{
        realnamespan.innerHTML="";
        realnamespan.style.color="#00ff00";
        realname.style.border="1px solid #00ff00"
    }

}
function surnameKontrola(){
    if (realsurname.value=="" || realsurname.value.length<=2 ){
        realsurnamespan.innerHTML="Unesite vise od 2 znaka. Hvala!";
        realsurnamespan.style.color="#ff0000";
        realsurname.style.border="1px solid #ff0000";
    }

    else{
        realsurnamespan.innerHTML="";
        realsurnamespan.style.color="#00ff00";
        realsurname.style.border="1px solid #00ff00"
    }

}

function passwordKontrola(){
    if( userpassword.value!=="" && passwordrep.value !=="" ){
        if(userpassword.value==passwordrep.value){
            userpasswordspan.innerHTML="";
            passwordrepspan.innerHTML="";

            userpassword.style.border="1px solid #00ff00";
            passwordrep.style.border="1px solid #00ff00";
        }
        else{
            userpasswordspan.innerHTML="";
            passwordrepspan.innerHTML= "Lozinke se ne podudaraju!";

            passwordrepspan.style.color="#ff0000";
            passwordrepspan.style.border="1px solid #ff0000";
        }
    }
    else{
        userpasswordspan.innerHTML="";
        passwordrepspan.innerHTML="";

        userpasswordspan.style.color="#ff0000";
        userpassword.style.border=" 1px solid #ff0000";
        
    }
}

