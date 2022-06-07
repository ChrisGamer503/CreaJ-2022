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