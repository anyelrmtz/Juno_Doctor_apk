<?php 
require '../Conexion/conexion.php';
$datos=$_GET;
$usuario=$datos['user'];
$contra=$datos['pass'];
$data='0';
$Sql="Select clave from usuario where usuario='$usuario' and contra='$contra'";
$sentencia=sqlsrv_query($conexion,$Sql);
if($sentencia===false){
    dile (print_r(sqlsrv_errora(),true));
}

if($row=sqlsrv_fetch_Array($sentencia,SQLSRV_FETCH_ASSOC)){
    echo $data='1';
}else{
    echo $data='0';
}
 
?>