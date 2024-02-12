/* sign up */
const signinform = document.querySelector('.signinform');
const signinbtn = document.querySelector('.uhpsignin');
const iconClosein = document.querySelector('.iconclose');

/* Sign in form*/
signinbtn.addEventListener('click', ()=> 
    {
        signinform.classList.add('active-popup');
    });

/* Remove icon for sign in form*/
iconClosein.addEventListener('click', ()=> 
    {
        signinform.classList.remove('active-popup');
    });

/* dont have acc*/
const dontsignin = document.querySelector('.dontsignin');
dontsignin.addEventListener('click', ()=> 
    {
        signinform.classList.add('active-popup');
    });

dontsignin.addEventListener('click', ()=> 
    {
        signupform.classList.remove('active-popup');
    });


/* sign up */
const signupform = document.querySelector('.signupform');
const signupbtn = document.querySelector('.uhpsignup');
const iconCloseup = document.querySelector('.iconcloseup');

/* Sign up form*/
signupbtn.addEventListener('click', ()=> 
    {
        signupform.classList.add('active-popup');
    });

/* Remove icon for sign in form*/
iconCloseup.addEventListener('click', ()=> 
    {
        signupform.classList.remove('active-popup');
    });

/* already have acc*/
const dontsignup = document.querySelector('.dontsignup');
dontsignup.addEventListener('click', ()=> 
    {
        signupform.classList.add('active-popup');
    });

dontsignup.addEventListener('click', ()=> 
    {
        signinform.classList.remove('active-popup');
    });


/* remove form*/
signinbtn.addEventListener('click', ()=> 
    {
        signupform.classList.remove('active-popup');
    });

signupbtn.addEventListener('click', ()=> 
    {
        signinform.classList.remove('active-popup');
    });










