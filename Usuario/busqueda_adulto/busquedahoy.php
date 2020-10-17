<?php 
require '../../Conexion/conexion.php';
$datos=$_GET;
$clave=$datos['clave'];
$data='0';
$fechaActual = date('d/m/Y');

$Sql="Select  *from consul_adulto where  clave='$clave' and fehca_cita='27/10/2020'";
$sentencia=sqlsrv_query($conexion,$Sql);

if($row=sqlsrv_fetch_Array($sentencia,SQLSRV_FETCH_ASSOC)){
    echo $data='2';
}else{
    echo $data='1';
}
 
?>