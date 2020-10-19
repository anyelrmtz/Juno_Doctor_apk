<?php 
require '../../../Conexion/conexion.php';
$datos=$_GET;
$clave=$datos['clave'];
$Sql="Select correo from usuario where clave='$clave'";
$sentencia=sqlsrv_query($conexion,$Sql);
if($sentencia===false){
    dile (print_r(sqlsrv_errora(),true));
}

while($row=sqlsrv_fetch_Array($sentencia,SQLSRV_FETCH_ASSOC)){
    echo $row['correos'];
}
 
?>