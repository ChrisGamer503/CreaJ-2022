const viewMenuElement = document.querySelectorAll(".view-div");
const principalMenuElement = document.querySelectorAll(".box_article");

viewMenuElement.forEach(elem =>{
    elem.addEventListener("click",()=>{
        console.log("se detecto click")
        principalMenuElement.forEach(elemini =>{
            elemini.classList.toggle("desplegable-view")
        })
    })
})
console.log("conectado")


