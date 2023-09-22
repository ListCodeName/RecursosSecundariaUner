document.getElementById("close-modal1").addEventListener("click", ()=>{
    document.getElementById("modal1").style.position = "absolute";
    document.getElementById("modal-contenido1").style.opacity = "0";
    setTimeout(()=>{
        document.getElementById("modal1").style.top = "-100vh";
    },350);
});

document.getElementById("open-modal1").addEventListener("click", ()=>{

    document.getElementById("modal1").style.position = "sticky";
    document.getElementById("modal-contenido1").style.opacity = "1";
    setTimeout(()=>{
        document.getElementById("modal1").style.top = "0vh";
    },250);
});