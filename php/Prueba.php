<?php	


echo '<script>

function next() {
    var elem1 = document.getElementsByClassName("elem1")
    var boton = document.getElementsByClassName("botonnext")

if (elem1.checkValidity()) {
    console.log("no permite pasar")
    <div class="btn">
        <button class="botonnext" onclick="next()"><a href="../html/cita5.php">Siguiente</a></button>
    </div>
}else{
    
    boton.style.display="none"
    console.log("Permite")
}
}

    </script>'
?>



