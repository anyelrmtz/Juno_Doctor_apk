<?php 
require '../../Conexion/conexion.php';
$datos=$_GET;
$clave=$datos['clave'];
$fechaActual = date('d/m/Y');

$Sql="Select  *from consul_adulto where  clave='$clave' and fehca_cita='$fechaActual'";
$sentencia=sqlsrv_query($conexion,$Sql);

while($row=sqlsrv_fetch_Array($sentencia,SQLSRV_FETCH_ASSOC)){
    echo "Hora: ".$row['hora_cita']." Fecha: ". $row['fehca_cita']." Doctora: ". $row['doctora']." Consulta: ".$row['tipo_consulta'].'';
}
 
?>