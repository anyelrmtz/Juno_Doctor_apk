<?php 
require '../../Conexion/conexion.php';
$datos=$_GET;
$clave=$datos['clave'];
$data='0';
$fechaActual = date('d/m/Y');



$Sql="Select  *from consult_nino where  clave='$clave' and fehca_cita= like '%$fechaActual'";
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