//variables
let select = document.querySelector(".select");
let options = document.querySelector(".options-langs");
let principal = document.querySelector(".principal")

//menu de idioma
select.addEventListener("click", ()=>{

    document.querySelector(".options-langs").classList.toggle("mostrar")

})

//Cambio de idioma
function mostrarMensaje(element) {
    let oldDataImg = principal.children[0].src
    let oldDataP = principal.children[1].innerHTML
    
    let newDataImg = element.children[0].src
    let newDataP = element.children[1].innerHTML

    principal.children[0].src = newDataImg;
    element.children[0].src = oldDataImg;
    principal.children[1].innerHTML = newDataP;
    element.children[1].innerHTML = oldDataP;
}

//Menu de hamburguesa
const toggleMenuElement = document.getElementById("togglemenu");
const mainMenuElement = document.getElementById("main-menu");

toggleMenuElement.addEventListener("click",()=>{
    mainMenuElement.classList.toggle("mainmenu-view")
})
