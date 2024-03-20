<?php

include 'conexion_be.php';

$correo = $_POST['correo'];
$contraseña =$_POST['contraseña'];

$query ="SELECT correo, contraseña FROM usuarios WHERE correo = '$correo' AND contraseña = '$contraseña'";


$ejecutar = mysqli_query($conexion, $query);
    


if ($ejecutar) {
    // Verificar si se encontraron resultados
    if (mysqli_num_rows($ejecutar) > 0) {
        // Iterar sobre cada fila de resultados
        while ($fila = mysqli_fetch_assoc($ejecutar)) {
            // Acceder a los valores de cada fila
            $correoUser = $fila['correo'];
            $contraseñaUser = $fila['contraseña'];  
            if ($correoUser == $correo &&  $contraseñaUser == $contraseña){
                echo '
       <script>
           alert("usuario logueado correctamente");
           window.location = "../index.html";
       </script>   
      ';
            }

            // Hacer algo con los datos obtenidos
            echo "Correo: " . $correo . ", Contraseña: " . $contraseña . "<br>";
        }
    } else {
        echo '
        <script>
            alert("contraseña incorrecta");
            window.location = "../index.php";
        </script>   
       ';

    }
} else {
    // Error en la consulta
    echo "Error: " . mysqli_error($conexion);
}


mysqli_close($conexion); 

?>