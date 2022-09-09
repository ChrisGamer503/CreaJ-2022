//variables
let select = document.querySelectorAll(".select");
let options = document.querySelectorAll(".options-langs");
let principal = document.querySelectorAll(".principal");
let divSpanish = document.querySelector(".spanish");
let divEnglish = document.querySelector(".english");

//IDIOMA POR DEFAULT (ES)
let idioma = sessionStorage.getItem("idioma")
if (!idioma) {
    sessionStorage.setItem("idioma", "es")
    console.log("idioma por default español")
}

cargarIdioma(idioma)

//menu de idioma
select.forEach(elemento =>{
    elemento.addEventListener("click", ()=>{
        options.forEach(elementito =>{
            elementito.classList.toggle("mostrar")
        })
    })
})

//Cambio de idioma
function mostrarMensaje() {

    let idioma = sessionStorage.getItem("idioma")
    console.log(idioma)
    cambiarIdioma(idioma)
    if (idioma == "es") {
        guardarIdioma("en")
    } else if (idioma == "en"){
        guardarIdioma("es")
    }
}

function cambiarIdioma(idioma) {
    if (idioma == "es") 
    {
        document.querySelectorAll(".english").forEach(elementito =>{
                    elementito.classList.add("mostrarIdioma")
        })
        document.querySelectorAll(".spanish").forEach(elementito =>{
                    elementito.classList.remove("mostrarIdioma")  
        })
        
    } else if (idioma == "en") 
    {
        document.querySelectorAll(".english").forEach(elementito => {
            elementito.classList.remove("mostrarIdioma")
        })
        document.querySelectorAll(".spanish").forEach(elementito => {
            elementito.classList.add("mostrarIdioma")
        })
        
    }
}

function detectarLenguaje(){
    if (getComputedStyle(divSpanish).display == "block") {
        console.log("Esto es español")
        return "es"
        
    } else if (getComputedStyle(divEnglish).display == "block") {
        console.log("Esto es ingles")
        return "en"
        
    }
}

function guardarIdioma(idioma){
    sessionStorage.setItem("idioma", idioma)
}

function cargarIdioma(idioma) {
    if (idioma == "en") 
    {
        document.querySelectorAll(".english").forEach(elementito =>{
                    elementito.classList.add("mostrarIdioma")
        })
        document.querySelectorAll(".spanish").forEach(elementito =>{
                    elementito.classList.remove("mostrarIdioma")  
        })
        
    } else if (idioma == "es") 
    {
        document.querySelectorAll(".english").forEach(elementito => {
            elementito.classList.remove("mostrarIdioma")
        })
        document.querySelectorAll(".spanish").forEach(elementito => {
            elementito.classList.add("mostrarIdioma")
        })
        
    }
}

//Menu de hamburguesa
const toggleMenuElement = document.querySelectorAll(".togglemenu");
const mainMenuElement = document.querySelectorAll(".main-menu");

toggleMenuElement.forEach(elemento =>{
    elemento.addEventListener("click",()=>{
        mainMenuElement.forEach(elementito =>{
            elementito.classList.toggle("mainmenu-view")
        })
    })
})