<?php 
    //Connectar
    $mysqli = new mysqli("localhost", "bladimir", "bladomir22", "ingles");
    if ($mysqli->connect_errno) {
        echo "Error de conexion de la base datos".$conexion->connect_error;
    exit(); 
    }
      
    if(isset($_POST['numControl'])){

        $numControl = $_POST['numControl'];
    
        $sql = "select numControl from alumnos where numControl = $numControl";
        $resultado = $mysqli->query($sql);

        $numFilas = $resultado->num_rows;
        

    }

echo "<br> <a href='index.php'>volver</a>"

?>