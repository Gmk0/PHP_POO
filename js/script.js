const open  = document.getElementById("open");
const modals  = document.getElementById("modals");
const close  = document.getElementById("close");

open.addEventListener("click",()=>{
    modals.classList.add("show");
})
close.addEventListener("click",()=>{
    modals.classList.remove("show");
})



