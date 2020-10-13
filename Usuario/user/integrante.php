<?php 
require '../../Conexion/conexion.php';
$datos=$_GET;
$clave=$datos['clave'];
$Sql="Select *from $clave ";
$sentencia=sqlsrv_query($conexion,$Sql);
if($sentencia===false){
    dile (print_r(sqlsrv_errora(),true));
}

while($row=sqlsrv_fetch_Array($sentencia,SQLSRV_FETCH_ASSOC)){
    echo "Nombre: ".$row['nombre_paciente']." Fecha denacimiento: ". $row['fehca_nac']." Edad: ". $row['edad'].'<br /> ';
 
   
}

 a
?>