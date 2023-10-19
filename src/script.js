document.getElementById("year").innerHTML = new Date().getFullYear();
const btnCart = document.querySelector('.container-icon')
const containerCartProducts = document.querySelector('.container-cart-products')

let contadorProductos = 0;
const contadorProductosSpan = document.getElementById('contador-productos');

btnCart.addEventListener('click', () => {
containerCartProducts.classList.toggle('hidden-cart')
})
document.addEventListener("DOMContentLoaded", function() {
        const cartProductList = document.querySelector('.cart-product-list');
        const totalPagar = document.querySelector('.total-pagar');
        const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
        const containerCartProducts = document.querySelector('.container-cart-products');

        const carrito = [];
        let total = 0;

        function actualizarCarrito() {
            cartProductList.innerHTML = '';
            totalPagar.textContent = `$${total.toFixed(2)}`;

            carrito.forEach(producto => {
                const listItem = document.createElement('li');
                listItem.innerHTML = `
                    <div class="nashe">
                    <button class="buttonclose">
                    <svg class="svgclose" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>    
                    <p class="titulo-producto-carrito">${producto.nombre}</p></div>    
                    <div class=otrodiv>  
                    <span class="cantidad-producto-carrito">1x</span>
                    <span class="precio-producto-carrito">$${producto.precio.toFixed(2)}</span>
                    </div>
                    `;

                cartProductList.appendChild(listItem);
            });
        }

        addToCartButtons.forEach(button => {
            button.addEventListener('click', () => {
                const productoId = button.getAttribute('data-product');
                const productos = {
                    'mate_alpaca': { nombre: 'Mate de Madera', precio: 40 },
                    'mate_calabaza': { nombre: 'Mate de Calabaza', precio: 50 },
                    'mate_messi': { nombre: 'Mate de Messi', precio: 500 },
                    'yerbero_azucar': { nombre: 'Mate de Messi', precio: 30 },
                    'termo': { nombre: 'Mate de Calabaza', precio: 60 }
                };

                const producto = productos[productoId];

                if (producto) {
                    carrito.push({ nombre: producto.nombre, precio: producto.precio });
                    total += producto.precio;
                    actualizarCarrito();
                    contadorProductos++;
            contadorProductosSpan.textContent = contadorProductos;
                }
            });
        });

        document.addEventListener('click', (event) => {
            if (event.target.classList.contains('buttonclose')) {
                const itemIndex = Array.from(event.target.parentNode.parentNode.children).indexOf(event.target.parentNode);
                const removedProduct = carrito.splice(itemIndex, 1)[0];
                total -= removedProduct.precio;
                actualizarCarrito();
                contadorProductos--;
                contadorProductosSpan.textContent = contadorProductos;    
            }
        });
    });