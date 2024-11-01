let modalLogin = document.getElementById("modal-login");
let registro = document.getElementById("register");
let login = document.getElementById("login");
let btnCerrarLogin = document.getElementById("close-login");
let btnSwitchLogin = document.getElementById("switch");
let btnAbrirLogin = document.getElementById("open-login");;

let flagLogReg = true;

btnCerrarLogin.addEventListener('click', ()=>{
    modalLogin.style.right = "-400px";
});

btnAbrirLogin.addEventListener('click', ()=>{
    modalLogin.style.right = "0px";
});

btnSwitchLogin.addEventListener('click', ()=>{
    if(flagLogReg){
        login.style.display = "none";
        registro.style.display = "flex";
        flagLogReg = false;
    }else{
        login.style.display = "flex";
        registro.style.display = "none";
        flagLogReg = true;
    }
});