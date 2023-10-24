<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav</title>
    <link href="../src/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../src/navstyle.css">    
    <link rel="stylesheet" href="../src/docs.min.js">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<body>
    <?php $conx=mysqli_connect("localhost","root","","matoros")or die("pasaron cositas en la conexion"); 
        session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: forms/login.php');
        exit;}
        $id=$_SESSION["id"];
        $sql="SELECT usertype from usuario where ID=$id";
        if(!$result= mysqli_query($conx,$sql)) die("consulta fallida");
        while ($fila= mysqli_fetch_assoc($result)){
        ?>



<nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="active">
                    <a href="#" class="nav-link">Inicio</a>
                </li>
                <li class="dropdown nav-item nav-link">
                    <div>
                        <p>Productos</p>
                        <div class="dropdown-content">
                          <a class="nav-link" href="index.php">Todos los Productos</a>
                          <a class="nav-link" href="#">Equipo de mates</a>
                          <a class="nav-link" href="#">Mates</a>
                          <a class="nav-link" href="#">Bombillas</a>
                          <a class="nav-link" href="#">Bolsos</a>
                          <a class="nav-link" href="#">Yerberas</a>
                          <a class="nav-link" href="#">Yerba Mate</a>
                        </div>
                      </div>
                      <?php if($fila["usertype"]==1){ ?>
                            <li class="nav-item">
                                <a href="Padmin.php" class="nav-link">panel de admin</a>
                            </li>
                        <?php }?>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Quienes somos?</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Venta a empresas</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Como comprar</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Preguntas frecuentes</a>
                </li>
                <?php }?>

                <li>
                    <div class="container-icon">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="icon-cart"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
                            />
                        </svg>
                        <div class="count-products">
                            <span id="contador-productos">0</span>
                        </div>    
                    </div>
                    <div class="container-cart-products hidden-cart">
                        <h3>Carrito de Compras</h3>
                        <ul class="cart-product-list">
                        </ul>
                        <p style="display: flex; justify-content: space-between; font-size: 20px; font-weight: 900; border-top: 1px solid #b29f91;">Total: <span class="total-pagar">$0</span></p>
                    </div>                      
                </li>
                <li class="nav-item">
                    <a href="perfil.php" class="nav-link"><?php echo $_SESSION["name"] ?></a>
                </li>
                <li class="nav-item">
                    <a href="../logica/logout.php" class="nav-link">logout</a>
                </li>
            </ul>
    </nav>
</body>
</html>