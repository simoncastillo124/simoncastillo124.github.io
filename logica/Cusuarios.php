<?php
$conx=mysqli_connect("localhost","root","","matoros")or die("pasaron cositas en la conexion"); 

$username=$_POST["username"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$calle=$_POST["calle"];
$callenum=$_POST["callenum"];
$codigopostal=$_POST["codigopostal"];
$password=$_POST["password"];

// aca se hace la carga de un usuario
if (isset($_POST["password_r"])){
    if ($password ==$_POST["password_r"]){
        $sql="INSERT INTO `usuario`( `username`, `password`, `email`, `telefono`, `domicilio`, `numero_domicilio`, `codigo_postal`, `usertype`) VALUES ('$username','$password','$email','$telefono','$calle','$callenum','$codigopostal','2')";
        mysqli_query($conx,$sql);
        mysqli_close($conx);
        header("location: login.php");
    }else{
        header("location: register.php");
    }
}else{
    header("location: register.php");
}


echo $username;
echo $email;
echo $telefono;
echo $calle;
echo $callenum;
echo $codigopostal;
echo $password;


?>