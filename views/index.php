<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<?php include("nav.php");
$sql="SELECT * FROM producto";
if(!$result= mysqli_query($conx,$sql)) die("consulta fallida");
?>

<div class="container-items">
<?php
    while ($fila= mysqli_fetch_assoc($result)) {
?>   
<div class="item">
    
    <figure>
        <img
            src="content-type:video/mp4,<?php echo $fila["imagen"] ?>"
            alt="producto"
        />
    </figure>
    <div class="info-product">
        <h2>Mate de madera y alpaca</h2>
        <p class="price">$40</p>
        <button class="add-to-cart-btn" data-product="mate_alpaca">Añadir al carrito</button>
    </div>
</div> 
<?php }?>
<div class="item">
    
        <figure>
            <img
                src="https://forexport.tradicionesargentinas.com/wp-content/uploads/2021/10/4220-scaled.jpg"
                alt="producto"
            />
        </figure>
        <div class="info-product">
            <h2>Mate de madera y alpaca</h2>
            <p class="price">$40</p>
            <button class="add-to-cart-btn" data-product="mate_alpaca">Añadir al carrito</button>
        </div>
    </div>
    <div class="item">
        <figure>
            <img
                src="https://matesibarra.com/wp-content/uploads/2021/06/linea-m.jpg"
                alt="producto"
            />
        </figure>
        <div class="info-product">
            <h2>Mate de calabaza</h2>
            <p class="price">$50</p>
            <button class="add-to-cart-btn" data-product="mate_calabaza">Añadir al carrito</button>
        </div>
    </div>
    <div class="item">
        <figure>
            <img
                src="https://d3ugyf2ht6aenh.cloudfront.net/stores/001/850/787/products/mmeee1-3da1655ec1e8598ac016321610819567-1024-1024.jpg"
                alt="producto"
            />
        </figure>
        <div class="info-product">
            <h2>Mate de Messi</h2>
            <p class="price">$500</p>
            <button class="add-to-cart-btn" data-product="mate_messi">Añadir al carrito</button>
        </div>
    </div>
    <div class="item">
        <figure>
            <img
                src="https://d22fxaf9t8d39k.cloudfront.net/d146c9bcaca9914690a19a9cb4ce06031e31d3839245803b8fd3751d02df11ac16935.jpeg"
                alt="producto"
            />
        </figure>
        <div class="info-product">
            <h2>Kit yerbera y azucarera</h2>
            <p class="price">$30</p>
            <button class="add-to-cart-btn" data-product="yerbera">Añadir al carrito</button>
        </div>
    </div>
    <div class="item">
        <figure>
            <img
                src="https://www.lumilagro.com.ar/wp-content/uploads/2023/04/Copia-de-termo-central-0.jpg"
                alt="producto"
            />
        </figure>
        <div class="info-product">
            <h2>Termo Rosario Central</h2>
            <p class="price">$60</p>
            <button class="add-to-cart-btn" data-product="termo">Añadir al carrito</button>
        </div>
    </div>
</div>
<footer>
    <div class="footer-line"></div>
    <div class="footer-wrapper">
        <section class="footer-top">
            <div class="footer-headline">
                <h2>Unite a matoros</h2>
                <p>
                    Suscribite para ver nuevos ingresos
                </p>
            </div>
            <div class="footer-subscribe">
                <input type="email" spellcheck="false" placeholder="Email">
                <button>
                    Registrarse
                </button>
            </div>
        </section>
        <div class="footer-columns">
            <section class="footer-logo">
                <h2>
                    <iconify-icon icon="fluent-emoji-flat:mate" width="100px"></iconify-icon>
                </h2>
            </section>
            <section>
                <h3>Productos</h3>
                <ul>
                    <li>
                        <a href="#" title="">Mates</a>
                    </li>
                    <li>
                        <a href="#" title="">Combos</a>
                    </li>
                    <li>
                        <a href="#" title="">Bombillas</a>
                    </li>
                    <li>
                        <a href="#" title="">Yerba mate</a>
                    </li>
                    <li>
                        <a href="#" title="">Termos</a>
                    </li>
                </ul>
            </section>
            <section>
                <h3>Recursos</h3>
                <ul>
                    <li>
                        <a href="#" title="Support">Soporte</a>
                    </li>
                    <li>
                        <a href="#" title="Help Centre">Centro de ayuda</a>
                    </li>
                </ul>
            </section>
            <section>
                <h3>Compania</h3>
                <ul>
                    <li>
                        <a href="#" title="About Us">About Us</a>
                    </li>
                    <li>
                        <a href="#" title="Blog">Blog</a>
                    </li>
                    <li>
                        <a href="#" title="Contact">Contacto</a>
                    </li>
                </ul>
            </section>
            <section>
                <h3>Legal</h3>
                <ul>
                    <li>
                        <a href="#" title="Terms and services">
                            Terminos
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Privacy Policy">
                            Privacidad
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Cookies">
                            Cookies
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Licenses">
                            Licencias
                        </a>
                    </li>
                </ul>
            </section>
        </div>
        <div class="footer-bottom">
            <div class='social-links'>
                <ul>
                    <li>
                        <a href="#" title="Instagram">
                            <iconify-icon icon="mdi:instagram" width="30px"  style="color: white;"></iconify-icon>                                
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Twitter">
                            <iconify-icon icon="bi:twitter" width="30px"  style="color: white;"></iconify-icon>                                
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Youtube">
                            <iconify-icon icon="mdi:youtube" width="30px"  style="color: white;"></iconify-icon>                                
                        </a>
                    </li>
                </ul>
            </div>

            <small>© Matoros <span id="year"></span>, All rights reserved</small>
        </div>
    </div>
</footer>
</body>
<script src="script.js"></script>
</html>
    