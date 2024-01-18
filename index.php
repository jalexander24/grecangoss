<!-- JuanMontesdeoca -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/inicio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Merriweather:wght@300&display=swap"
        rel="stylesheet">
    <title>Constructora Grecangoss</title>
    <style>
    * {
        font-family: 'Josefin Sans', sans-serif;
    }

    body{
        background-color: whitesmoke;
    }

    .btn-custom {
        background-color: orange;
        /* Fondo naranja */
        color: white;
        /* Texto blanco */
        border: 1px solid orange;
        /* Borde naranja */
        /* Agrega cualquier otra propiedad CSS que desees */
    }
    .card-body{
        background-color: whitesmoke;
    }

    .btn-custom:hover {
        background-color: #007bff;
    }

    .custom-thin-border {
        background-color: orange;
        border: 1px solid orange;
        border-radius: 5px;
        /* Ajusta este valor según desees para las esquinas redondeadas */
        color: black;
        /* Cambia el color del texto a blanco para que sea legible */
        /* Otros estilos personalizados si es necesario */
    }

    .fixed-image {
        width: 100%;
        /* Ancho fijo al 100% para que ambas imágenes tengan el mismo ancho */
        height: 350px;
        /* Altura automática para mantener la proporción original */
    }
    </style>
</head>

<body>
    <?php include './template/header.php'; ?>

    <br><br>


    <section>
        <div class="container">
            <div class="hero text-center mt-5">
                <br><br>
                <p style="font-size: 24px;">
                    Constructora Grecangoss es una compañía con más de 20 años en el mercado, 
                    dedicada a la comercialización, provisión e instalación de materiales de construcción.
                    Siendo pioneros en insertar los materiales de Policarbonato y Acrílico en 
                    nuestro territorio, desarrollando proyectos de alto impacto y durabilidad en obras locales.
                </p>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card custom-card custom-thin-border">
                        <img src="https://constructorapc.com/wp-content/uploads/2019/10/estructuras-metalicas-constructora-pc-cuenca-ecuador-5874341.png"
                            class="img-fluid fixed-image" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">¿Quieres ver nuestros productos?</h5>
                            <a href="productos.php" class="btn btn-custom">Haga clic
                                aquí</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card custom-card custom-thin-border">
                        <img src="https://pr0.nicelocal.ec/MasE7o6E44Nk9mduT0eokQ/630x384,q85/4px-BW84_n0QJGVPszge3NRBsKw-2VcOifrJIjPYFYkOtaCZxxXQ2RObrIGwPfTh5WXOkhAvSzHEF1863n7arDXEtKdNkb5AWiQaW0kzTadfcY0BtdLbxA"
                            class="img-fluid fixed-image" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">¿Te interesan nuestras obras?</h5>
                            <a href="obras.php" class="btn btn-custom">Haga clic aquí</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="hero text-center mt-5">
                <p style="font-size: 24px;">
                    Ofrecemos amplia gama de productos, cumpliendo las expectativas de nuestros clientes, contribuyendo a la 
                    innovación en diseños y aplicaciones arquitectónicas.
                </p>
            </div>
        </div>



        <div class="boton">
            <div class="">
                <div class="">
                    <a href="https://api.whatsapp.com/send?phone=593983942571" class="whatsapp-button">
                        <img src="imagenes/whatsapp.png" alt="WhatsApp Icon">
                        Contáctenos
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="mision">
                <h1 class="mision h2">MISIÓN</h1>
                <p>
                    Comercializar materiales de construcción enfocado en cubiertas y techados con productos 
                    de la mejor calidad, teniendo variedad y opciones para nuestros clientes, brindando soluciones técnicas 
                    y asesoría personalizada para uso de espacios exteriores.
                </p>
            </div>
            <div class="vision">
                <h1 class="mision h2">VISIÓN</h1>
                <p>
                    Seguir proyectando los productos translúcidos en el mercado, diversificar y dar a conocer la variedad de 
                    otros productos con sus aplicaciones tanto industrial como para el hogar.
                </p>
            </div>
            <div class="valores">
                <h1 class="mision h2">VALORES</h1>
                <ul>
                    <li>Confianza</li>
                    <li>Responsabliidad</li>
                    <li>Servicio</li>
                    <li>Calidad</li>
                    <li>Orientación al Cliente</li>
                </ul>
            </div>
        </div>
    </section>

    <?php include './template/footer.php'; ?>


</body>

</html>