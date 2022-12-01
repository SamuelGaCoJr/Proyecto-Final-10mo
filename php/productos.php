<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/productos.css">
    <title>Productos</title>
</head>
<body>
<header>
    <?php
        include "./header.php"
    ?>
</header>
<main>
<!-- Esto es la parte de filtros para los produtos -->
<aside class="filtros">
    <h1 class="titulo-filtros">Filtros</h1>
    <h3>Precio</h3>
    <input type="button" class="mayor-menor" value="Menor a mayor"><br>
    <input type="button" class="mayor-menor" value="Mayor a menor">
    <form action="" method="POST"><br>
        <h3>Entre precio</h3>
        <p>Precio mínimo</p>
        <input type="number" class="min-precio" placeholder="$300">
        <p>Precio máximo</p>
        <input type="number" class="max-precio" placeholder="$6,000">
        <input type="button" class="buscar-filtro" value="Buscar">
    </form>
</aside>
<div class="caja-productos">
    <div class="producto">
        <img src="../img/productos/choco.png" alt="Chocomilk" class="img-producto">
        <div class="texto-producto">
            <h3 class="nombre-producto">Chocomilk Pancho Pantera 500ml</h3>
            <span class="precio">$3,000.00</span><br>
            <button class="agregar-carrito"><img class="carrito" src="../img/pagina/carrito.svg" alt=""></button>
        </div>
    </div>
    <div class="producto">
        <img src="../img/productos/choco.png" alt="Chocomilk" class="img-producto">
        <div class="texto-producto">
            <h3 class="nombre-producto">Chocomilk Pancho Pantera 500ml</h3>
            <span class="precio">$3,000.00</span><br>
            <button class="agregar-carrito"><img class="carrito" src="../img/pagina/carrito.svg" alt=""></button>
        </div>
    </div>
    <div class="producto">
        <img src="../img/productos/choco.png" alt="Chocomilk" class="img-producto">
        <div class="texto-producto">
            <h3 class="nombre-producto">Chocomilk Pancho Pantera 500ml</h3>
            <span class="precio">$3,000.00</span><br>
            <button class="agregar-carrito"><img class="carrito" src="../img/pagina/carrito.svg" alt=""></button>
        </div>
    </div>
    <div class="producto">
        <img src="../img/productos/choco.png" alt="Chocomilk" class="img-producto">
        <div class="texto-producto">
            <h3 class="nombre-producto">Chocomilk Pancho Pantera 500ml</h3>
            <span class="precio">$3,000.00</span><br>
            <button class="agregar-carrito"><img class="carrito" src="../img/pagina/carrito.svg" alt=""></button>
        </div>
    </div>
    <div class="producto">
        <img src="../img/productos/choco.png" alt="Chocomilk" class="img-producto">
        <div class="texto-producto">
            <h3 class="nombre-producto">Chocomilk Pancho Pantera 500ml</h3>
            <span class="precio">$3,000.00</span><br>
            <button class="agregar-carrito"><img class="carrito" src="../img/pagina/carrito.svg" alt=""></button>
        </div>
    </div>
</div>

<!-- Esto es el footer -->
<footer>
    <?php
        include "./footer.php"
    ?>
</footer>
<script src="/js/header.js"></script>
<script src="/js/productos.js"></script>
</main>
</body>
</html>