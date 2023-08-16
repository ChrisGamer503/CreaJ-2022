let check = document.querySelectorAll(".check");
let sintoma = document.querySelectorAll(".invisible");
let filtrar = document.querySelector(".button-buscar");


filtrar.addEventListener("click", ()=>{
    check.forEach((element, k) => {
        if (element.checked) {
            let value_check = element.nextElementSibling.textContent.toLowerCase();
            sintoma.forEach((xd, j) =>{
                let array = xd.innerHTML.replaceAll("\n", "").replaceAll("<p>", "").split("</p>").map(x => x.trim())
                xd.parentElement.style.display = "none"
                array.forEach((a, i) =>{
                    if (array[i].toLowerCase) {
                        array[i] = array[i].toLowerCase();
                        if (array[i].trim() == value_check.trim()) {
                            sintoma[j].parentElement.style.display = "block";
                        } 
                    }
                })
            })
        }
        if (check.length == k+1) {
            if (detectCheck()) {
                console.log("no hay checkeados");
                sintoma.forEach(elementote =>{
                    elementote.parentElement.style.display = "block"
                })
            }
        }
    });
    testing();
});

function detectCheck() {
    let saveme = true
    check.forEach(a => {
        if (a.checked) {
            console.log(a)
            saveme = false;
        }
    })
    return saveme;
}
let piecito = document.querySelector("footer");
function testing(params) {
    if (document.querySelector("body").scrollHeight <= 1548) {
        piecito.style.marginTop = "1600px"
    }
    else if (document.querySelector("body").scrollHeight <= 2000) {
        console.log("Añadir 1400px de margin")
        piecito.style.marginTop = "1600px"
    }
    
}
