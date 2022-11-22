<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Inicio SMART-X</title>
</head>
<body>
<!-- esto es el header -->
<header>
    <?php
        include "./php/header.php"
    ?>
</header>
<main>
<!-- Esto es el carrusel de imagenes -->
    <img class="promo" src="./img/productos/promo.png" alt="">
<!-- Estos son los cuadros de beneficios al contratarnos -->
    <section class="cuadros-beneficios">
        <h2 class="titulo-beneficios1">Beneficios al contratarnos</h2>
    </section>
    <section class="cuadros-beneficios">
        <div class="beneficios">
            <div>
                <img class="icono" src="/img/pagina/seguridad.svg" alt="">
            </div>
            <h2 class="titulo-beneficios">Mayor seguridad</h2>
        </div>
        <div class="beneficios">
            <div>
                <img class="icono" src="/img/pagina/capacitacion.svg" alt="">
            </div>
            <h2 class="titulo-beneficios">Capacitación</h2>
        </div>
        <div class="beneficios">
            <div>
                <img class="icono" src="/img/pagina/soporte.svg" alt="">
            </div>
            <h2 class="titulo-beneficios">Soporte técnico</h2>
        </div>
        <div class="beneficios">
            <div>
                <img class="icono" src="/img/pagina/instalacion.svg" alt="">
            </div>
            <h2 class="titulo-beneficios">Instalación</h2>
        </div>
    </section>
    <!-- Inclusion -->
    <section class="inclusion">
        <div class="todo-inclusion">
            <h2 class="titulo-inclusion">Inclusión</h2>
            <label for="" class="texto-inclusion">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum dolorum iste sunt quia id doloribus porro earum incidunt modi unde tempore, deserunt quibusdam mollitia pariatur aut quis fuga doloremque dolore.</label><br>
            <img src="/img/pagina/inclusion.png" alt="" class="img-inclusion">
        </div>
    </section>
    <section class="misyvis">
        <div class="mision">
            <h2 class="titulo-mision">Misión</h2>
            <label for="" class="texto-mision">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed earum, laborum temporibus enim, odio, velit doloribus eaque rem odit quisquam hic at laudantium repudiandae voluptate explicabo quia. Doloribus, quibusdam corrupti! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore necessitatibus nam modi suscipit alias eius beatae impedit deleniti cupiditate dolorem? Vel eius consequatur quibusdam? Expedita tempore odio natus sapiente saepe? <br>
                <img src="/img/pagina/mision.png" alt="" class="img-mision">
            </label>
        </div>
        <div class="vision">
            <h2 class="titulo-vision">Visión</h2>
            <label for="" class="texto-vision">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti rem eius, quibusdam eum alias, facere, laboriosam officia libero adipisci illum quasi. Tenetur, laboriosam cupiditate aliquid deleniti vel quae possimus rerum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi amet placeat officia eius officiis nulla odit vel! Accusantium, quaerat error eaque repudiandae, molestiae sint nesciunt necessitatibus beatae voluptatum ut ea. <br>
                <img src="/img/pagina/vision.png" alt="" class="img-vision">
            </label>
        </div>
    </section>
    <footer>
        <?php
            include "./php/footer.php"
        ?>
    </footer>
</main>

</body>
</html>