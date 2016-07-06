<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
/*conexion a la base de datos*/
$conexion=mysqli_connect("localhost","root","","login"); 
$consulta="SELECT *FROM usuarios WHERE usuario='$usuario' and clave='$clave' ";
$resultado=mysqli_query($conexion,$consulta);/*si  conside nos da un error*/

$filas=mysqli_num_rows($resultado);

if($filas>0){
    header("location:bienvenido.html");
}else{
    echo "Error en la autenticación";
}

mysqli_free_result($resultado);
mysqli_close($conexion);


?>
