document.getElementById("play").addEventListener("click",()=>{
    document.getElementById("bar1").style.width = "100%";
    document.getElementById("bar2").style.width = "100%";
    document.getElementById("bar3").style.width = "100%";
    document.getElementById("bar4").style.width = "100%";
});

document.getElementById("prev").addEventListener("click",()=>{
    document.getElementById("bar1").style.width = "0%";
    document.getElementById("bar2").style.width = "0%";
    document.getElementById("bar3").style.width = "0%";
    document.getElementById("bar4").style.width = "0%";
});
