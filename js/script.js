menu = document.querySelector(".menu");

menu.onclick = function(){
    let nav = document.querySelector(".nav");
    nav.classList.toggle("active");

};

var signin1 = document.getElementById("signin1");
var signinform = document.getElementById("signinform");
var signup1 = document.getElementById("signup1");
var signupform = document.getElementById("signupform");
var user = document.getElementById("user-logo");
var scription= document.getElementById("scription");
var like= document.getElementById("like");
var sign = false ;
var signin = false ;
var signup = false ;

like.addEventListener("click" , function(){
    alert("like it");
})
user.addEventListener("click" , function(){
    
    if (sign == false){
        sign = true;
        scription.style.display="flex";
        signinform.style.display='none';
        signupform.style.display='none';
    }else if (sign== true ){
        sign = false;
        scription.style.display="none";
        signinform.style.display='none';
        signupform.style.display='none';
    }
})


signin1.addEventListener("click" , function(){
    
    if (signin == false){
        signin = true;
        signinform.style.display='flex';
        signupform.style.display='none';
        scription.style.display="none";
        
    }else if (signin== true ){
        signin = false;
        signinform.style.display='none';
        signupform.style.display='none';
        scription.style.display="flex";
    }
})
signup1.addEventListener("click" , function(){
    
    if (signup == false){
        signup = true;
        signupform.style.display='flex';
        signinform.style.display='none';
        scription.style.display="none";
        
    }else if (signup== true ){
        signup = false;
        signupform.style.display='none';
        signinform.style.display='none';
        scription.style.display="flex";
    }
})
