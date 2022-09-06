let todos = document.querySelector(".showtext").children;

document.querySelector(".medico-general").style.display="block"

function hide(elementoClickeado){
    for (let i = 0; i < todos.length; i++){
        console.log(todos[i].className,elementoClickeado.id)
        let clasesDelParrafo = todos[i].className
        if(clasesDelParrafo != elementoClickeado.id){
            todos[i].style.display="none"
            console.log(clasesDelParrafo == elementoClickeado.id)
        }
        else{
            todos[i].style.display="block"
            console.log(todos[i])
        }
    }
}

function detectClick(elementoClickeado){
    console.log(elementoClickeado.id)
    if(elementoClickeado.id == "medico-general"){
       hide(elementoClickeado)
    }

    else if (elementoClickeado.id == "pediatra"){
        hide(elementoClickeado)
    }

    else if (elementoClickeado.id == "gastroenterologo"){
        hide(elementoClickeado)
    }

    else if (elementoClickeado.id == "ortopeda"){
        hide(elementoClickeado)
    }

    else if (elementoClickeado.id == "psiquiatra"){
        hide(elementoClickeado)
    }

    else if (elementoClickeado.id == "alergologo"){
        hide(elementoClickeado)
    }
}



let todosEN = document.querySelector(".showtextEN").children;

document.querySelector(".medico-generalEN").style.display="block"

function hideEN(elementoClickeadoEN){
    for (let j = 0; j < todosEN.length; j++){
        console.log(todosEN[j].className,elementoClickeadoEN.id)
        let clasesDelParrafoEN = todosEN[j].className
        if(clasesDelParrafoEN != elementoClickeadoEN.id){
            todosEN[j].style.display="none"
            console.log(clasesDelParrafoEN == elementoClickeadoEN.id)
        }
        else{
            todosEN[j].style.display="block"
            console.log(todosEN[j])
        }
    }
}

function detectClickEN(elementoClickeadoEN){
    console.log(elementoClickeadoEN.id)
    if(elementoClickeadoEN.id == "medico-generalEN"){
       hideEN(elementoClickeadoEN)
    }

    else if (elementoClickeadoEN.id == "pediatraEN"){
        hideEN(elementoClickeadoEN)
    }

    else if (elementoClickeadoEN.id == "gastroenterologoEN"){
        hideEN(elementoClickeadoEN)
    }

    else if (elementoClickeadoEN.id == "ortopedaEN"){
        hideEN(elementoClickeadoEN)
    }

    else if (elementoClickeadoEN.id == "psiquiatraEN"){
        hideEN(elementoClickeadoEN)
    }

    else if (elementoClickeadoEN.id == "alergologoEN"){
        hideEN(elementoClickeadoEN)
    }
}


