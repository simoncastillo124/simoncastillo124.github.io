<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
    <?php include("../nav.php");
        $sql="SELECT * from usuario where ID=$id";
        if(!$result= mysqli_query($conx,$sql)) die("consulta fallida");
        while ($fila= mysqli_fetch_assoc($result)){
    ?>
    <link href="../../src/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../../src/navstyle.css">    
    <link rel="stylesheet" href="../../src/docs.min.js">
</head>
<body>
    <div>
    <?php if (isset($_GET["id"])){ ?>
        <form class="login" action="../../logica/Cusuarios.php?id=<?php echo $fila["ID"] ?>" method="post">
            <h1>user edit</h1>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name="username" value="<?php echo $fila["username"] ?>" placeholder="Nombre de usuario">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name="email" value="<?php echo $fila["email"] ?>" placeholder="Gmail">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="number" class="login__input" name="telefono" value="<?php echo $fila["telefono"] ?>" placeholder="NRO Telefono">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name="calle" value="<?php echo $fila["domicilio"] ?>" placeholder="calle">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="number" class="login__input" name="callenum" value="<?php echo $fila["numero_domicilio"] ?>" placeholder="NRO domcilio">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="number" class="login__input" name="codigopostal" value="<?php echo $fila["codigo_postal"] ?>" placeholder="CODIGO POSTAL">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" íd="password" name="password" value="<?php echo $fila["password"] ?>" placeholder="Contraseña">
				</div>
                <div class="login__field">
                    <?php 
                            if($fila["usertype"]==1){       ?>
                    <label for="usert"> tipo de usuario </label>
                    <select name="usertype" id="usert">
                        <option value="1">ADMIN</option>
                        <option value="2">USER</option>
                    </select>
                    <?php
                        }
                        } 
                        }?>
				</div>
				<button class="button login__submit" >
					<span class="button__text">editar</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
        </div>
        </body>
</html>