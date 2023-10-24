<?php include("nav.php");  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel</title>
</head>
<?php 
$sl="SELECT usertype from usuario where ID=$id";
if(!$resul= mysqli_query($conx,$sl)) die("consulta fallida");
while ($row= mysqli_fetch_assoc($resul)){
    if($row["usertype"]!=1){

        header("location: index.php ");
    }

 }


$sql="SELECT * FROM usuario";
if(!$result= mysqli_query($conx,$sql)) die("consulta fallida");
?>
<body>
<button id="toggleButton">Mostrar/Esconder usuarios</button>
    <table class="table table-dark" id="usuarios" style="display: none;" >
<thead>
<tr>
<td>nombre</td>
<td>email</td>
<td>telefono</td>
<td>domicilio</td>
<td>NRO domicilio</td>
<td>codigo postal</td>
<td>usertype</td>
<td>accion</td>
</tr>
</thead>
<?php while ($fila= mysqli_fetch_assoc($result)) { ?>
<tbody>
<tr>
<td><?php echo $fila["username"] ?></td>
<td><?php echo $fila["email"] ?></td>
<td><?php echo $fila["telefono"] ?></td>
<td><?php echo $fila["domicilio"] ?></td>
<td><?php echo $fila["numero_domicilio"] ?></td>
<td><?php echo $fila["codigo_postal"] ?></td>
<td><?php echo $fila["usertype"] ?></td>
<td>&nbsp;</td>
</tr>
</tbody>
<?php }?>
</table>
    <script >
        // Obtén una referencia al botón y a la tabla
        var toggleButton = document.getElementById("toggleButton");
        var miTabla = document.getElementById("usuarios");

        // Agrega un evento de escucha al botón
        toggleButton.addEventListener("click", function() {
            // Verifica si la tabla está visible
            if (miTabla.style.display === "none") {
                // Si está oculta, muéstrala
                miTabla.style.display = "table";
            } else {
                // Si está visible, ocúltala
                miTabla.style.display = "none";
            }
        });

    </script>
</body>
</html>