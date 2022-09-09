yo=document.getElementById("yo")
divyo=yo.parentElement
yo.addEventListener("click",()=>{
    console.log(yo.checked)
    divyou.classList.remove("boxtu2")
    divyo.classList.add("boxyo1")
})

you=document.getElementById("you")
divyou=you.parentElement
you.addEventListener("click",()=>{
    console.log(yo.checked)
    divyou.classList.add("boxtu2")
    divyo.classList.remove("boxyo1")
})


yoen=document.getElementById("yoen")
divyoen=yoen.parentElement
yoen.addEventListener("click",()=>{
    console.log(yo.checked)
    divyouen.classList.remove("boxtu2")
    divyoen.classList.add("boxyo1")
})

youen=document.getElementById("youen")
divyouen=youen.parentElement
youen.addEventListener("click",()=>{
    console.log(yo.checked)
    divyouen.classList.add("boxtu2")
    divyoen.classList.remove("boxyo1")
})


