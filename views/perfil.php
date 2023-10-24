<?php
$conx=mysqli_connect("localhost","root","","matoros")or die("pasaron cositas en la conexion");

if (mysqli_connect_error()) {

// si se encuentra error en la conexión

exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}

$stmt = $conx->prepare('SELECT password, email FROM usuario WHERE id = ?');




session_start();
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();


?>

<body class="loggedin">
    <nav class="navtop">
        <h1 style="color:white;">Sistema de Login Básico ConfiguroWeb</h1>
        <a href="inicio.php" style="color:white;">Inicio</a>
        <a href="perfil.php" style="color:white;"><i class="fas fa-user-circle"></i>Información de Usuario</a>
        <a href="cerrar-sesion.php" style="color:white;"><i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a>
    </nav>
    <div class="content">

        <h2>Información del Usuario</h2>
        <div>
            <p>
                La siguiente es la información registrada de tu cuenta
            </p>
            <table>
                <tr>
                    <td>Usuario:</td>
                    <td><?= $_SESSION['name'] ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?= $email ?></td>
                    <a href="forms/Ueditar.php?id=<?php echo $_SESSION["id"] ?>">editar perfil</a>
                </tr>
            </table>



        </div>


    </div>