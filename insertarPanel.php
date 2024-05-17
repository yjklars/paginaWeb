<?php
include("conexion.php");
$con=conectar();
//var_dump($_POST);

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$alias=$_POST['alias'];
$clave=$_POST['clave'];
$email=$_POST['email'];
$direccion=$_POST['direccion'];
$fechaNacimiento=$_POST['fechaNacimiento'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$areaInteres="";
$descripcion=$_POST['descripcion'];

if(isset($_POST['opcion'])){
    $areaInteres=implode(",",$_POST['opcion']);
}
//echo("INSERT INTO usuario VALUES ('$nombre','$apellido','$alias','$clave','$email','$direccion','$fechaNacimiento','$edad','$sexo','$areaInteres','$descripcion')");
$sql="INSERT INTO usuario (nombre,apellido,alias,clave,email,direccion,fechaNacimiento,edad,sexo,areaInteres,descripcion) VALUES('$nombre','$apellido','$alias','$clave','$email','$direccion','$fechaNacimiento','$edad','$sexo','$areaInteres','$descripcion')";
$query=mysqli_query($con,$sql);


if($query){
    Header("Location: PanelDeControl.php");
}
else{
}

?>