<?php


$conexion = mysqli_connect("localhost", "root", "", "login_registro_db");


 if($conexion){
     echo "Conectando exitosamente a la base de Datos";
}else{
    echo "No se ha podido conectar a la base de datos";
} 


?>