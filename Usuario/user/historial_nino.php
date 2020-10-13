<?php 
require '../../Conexion/conexion.php';
$datos=$_GET;
$clave=$datos['clave'];
$Sql="Select *from consul_nino where clave='$clave'";
$sentencia=sqlsrv_query($conexion,$Sql);
if($sentencia===false){
    dile (print_r(sqlsrv_errora(),true));
}

while($row=sqlsrv_fetch_Array($sentencia,SQLSRV_FETCH_ASSOC)){
    echo "Nombre: ".$row['nombre_nino']." Fecha: ". $row['fehca_cita']." Hora: ". $row['hora_cita']." Consulta: ".$row['tipo_consulta']." Doctora:".$row['doctora'].'<br /> ';
 
   
}

 
?>