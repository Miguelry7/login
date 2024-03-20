<?php


include 'conexion_be.php';

$nombre_completo =$_POST['nombre_completo'];
$cedula =$_POST['cedula'];
$telefono = $_POST['telefono'];
$correo =$_POST['correo'];
$ocupacion = $_POST['ocupacion'];
$ingresos =$_POST['ingresos'];
$valor_prestamo = $_POST['valor_prestamo'];
$plazo_reembolso =$_POST['plazo_reembolso'];




$query ="INSERT INTO panel_de_usuario (nombre_completo, cedula,  telefono, correo, ocupacion, ingresos, valor_prestamo, plazo_reembolso) 
         VALUES('$nombre_completo', '$cedula', '$telefono', '$correo', '$ocupacion', '$ingresos', '$valor_prestamo', '$plazo_reembolso')";


$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
        alert("usuario almacenado exitosamdente");
        window.location = "../panel_de_usuario.html"; 
    </script>   
   ';
}else{
echo '<script>
alert("intentalo de nuevo, usuario no almacenado ' . mysqli_error($conexion) . '");
window.location = "../panel_de_usuario.html";
</script>   
 ';

}


mysqli_close($conexion); 

?>