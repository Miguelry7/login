<?php

     

include 'conexion_be.php';

$cedula = $_POST['cedula'];
$nombre =$_POST['nombre'];
$apellido = $_POST['apellido'];
$monto =$_POST['monto'];
$fecha_contrato = $_POST['fecha_contrato'];
$cuota_mensual =$_POST['cuota_mensual'];
$porcentaje_interes = $_POST['porcentaje_interes'];
$plazo_pago =$_POST['plazo_pago'];
$estado_prestamo =$_POST['estado_prestamo'];



$query ="INSERT INTO creditos (cedula, nombre, apellido, monto ,fecha_contrato, cuota_mensual, porcentaje_interes, plazo_pago, estado_prestamo) 
         VALUES('$cedula', '$nombre', '$apellido', '$monto', '$fecha_contrato', '$cuota_mensual', '$porcentaje_interes', '$plazo_pago', '$estado_prestamo')";


$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
        alert("usuario almacenado exitosamdente");
        window.location = "../creditos.html"; 
    </script>   
   ';
}else{
echo '<script>
alert("intentalo de nuevo, usuario no almacenado ' . mysqli_error($conexion) . '");
window.location = "../creditos.html";
</script>   
 ';

}


mysqli_close($conexion); 

?>