<?php
     
include 'conexion_be.php';

$nombre = $_POST['nombre'];
$cedula =$_POST['cedula'];
$direccion = $_POST['direccion'];
$telefono =$_POST['telefono'];
$correo = $_POST['correo'];
$genero =$_POST['genero'];
$codeudor =$_POST['codeudor'];
$ocupacion = $_POST['ocupacion'];
$ingresos =$_POST['ingresos'];
$valor_prestamo =$_POST['valor_prestamo'];




$query ="INSERT INTO clientes ( nombre, cedula, direccion, telefono , correo, genero, codeudor, ocupacion, ingresos, valor_prestamo) 
         VALUES('$nombre', '$cedula', '$direccion', '$telefono', '$correo', '$genero', '$codeudor', '$ocupacion', '$ingresos', '$valor_prestamo')";


$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
        alert("usuario almacenado exitosamdente");
        window.location = "../clientes.html"; 
    </script>   
   ';
}else{
echo '<script>
alert("intentalo de nuevo, usuario no almacenado ' . mysqli_error($conexion) . '");
window.location = "../clientes.html";
</script>   
 ';

}


mysqli_close($conexion); 

?>