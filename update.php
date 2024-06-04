<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
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
$adm=$_POST['adm'];

if(isset($_POST['opcion'])){
    $areaInteres=implode(',',$_POST['opcion']);
}
$sql="UPDATE usuario SET nombre='$nombre',apellido='$apellido',alias='$alias',clave='$clave',email='$email',direccion='$direccion',fechaNacimiento='$fechaNacimiento',edad='$edad',sexo='$sexo',areaInteres='$areaInteres',descripcion='$descripcion',adm='$adm' WHERE id='$id'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: PanelDeControl.php");
}

?>