<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/productos.css"> <!-- Ruta a tu archivo bootstrap.min.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Merriweather:wght@300&display=swap"
        rel="stylesheet">
        <title>Obras</title>
    <style>
    * {
        font-family: 'Josefin Sans', sans-serif;
    }

    body {
        background-color: whitesmoke;
    }

    .obra-imagen {
        width: 10px;
        /* Tamaño deseado para las imágenes */
        height: 10px;
        /* Tamaño deseado para las imágenes */
        object-fit: cover;
        /* Esto evita que la imagen se distorsione y recorta o ajusta su tamaño para encajar */
    }

    .titulo-obras {
        text-align: center;
        margin-bottom: 20px;
    }

    .custom-thin-border {
        border: 1px solid orange;
        border-radius: 5px;
        /* Ajusta este valor según desees para las esquinas redondeadas */
        color: black;
        /* Cambia el color del texto a blanco para que sea legible */
        /* Otros estilos personalizados si es necesario */
    }

    .card-img-top {
        width: 250px;
        /* Establece el ancho deseado */
        height: 250px;
        /* Establece la altura deseada */
        object-fit: cover;
        /* Esto evita que la imagen se distorsione y recorta o ajusta su tamaño para encajar */
        margin: 15px;
    }

    .card.rounded {
        border-radius: 15px;
    }
    </style>
</head>

<body>
<?php include './template/header.php'; ?>
<br>
<br>
<br>
    <div class="container mt-5">
        <h1 class="titulo-obras">Obras</h1>
        <div class="row">
            <?php
        $obras = [
            ['nombre' => 'Policarbonato', 'imagen' => 'imagenes/obras/Grecangoss_Policarbonato.jpg', 'enlace' => 'tpobras/Grecangoss_Policarbonato.php'],
            ['nombre' => 'Domos Acrílicos', 'imagen' => 'imagenes/obras/Grecangoss_Domos_Acrílicos.jpg', 'enlace' => 'tpobras/Grecangoss_Domos_Acrílicos.php'],
            ['nombre' => 'Fibra de Vidrio', 'imagen' => 'imagenes/obras/Grecangoss_Fibra_Vidrio.jpg', 'enlace' => 'tpobras/Grecangoss_Fibra_Vidrio.php'],
                       // Agrega más obras manualmente aquí
        ];
        
        // ... Tu código PHP para mostrar obras ...

            // Este valor controlará cuántos obras se muestran por página
            $obrasPorPagina = 12;
            $totalObras = count($obras);

            // Obtiene la página actual de la URL
            $paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

            // Calcula el índice de inicio para la página actual
            $inicio = ($paginaActual - 1) * $obrasPorPagina;

            // Filtra los obras para mostrar solo los de la página actual
            $obrasPagina = array_slice($obras, $inicio, $obrasPorPagina);

            foreach ($obrasPagina as $obra) {
                echo '
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 " >
                    <a href="' . $obra['enlace'] . '" style="text-decoration: none; color: inherit;">
                        <div class="card rounded custom-thin-border">
                            <img src="' . $obra['imagen'] . '" class="card-img-top mx-auto img-fluid obra-imagen" alt="' . $obra['nombre'] . '">
                            <div class="card-body ">
                                <h5 class="card-title">' . $obra['nombre'] . '</h5>
                            </div>
                        </div>
                    </a>
                </div>';

                // Configura una cookie cuando se hace clic en el enlace del obra
                echo '
                <script>
                    document.querySelector("a[href=\'' . $obra['enlace'] . '\']").addEventListener("click", function() {
                        document.cookie = "obra_visitado=' . $obra['nombre'] . '";
                    });
                </script>';
            }
            
            
            ?>
        </div>
        <ul class="pagination justify-content-center">
            <?php
            // Calcula el número total de páginas
            $totalPaginas = ceil($totalObras / $obrasPorPagina);

            // Muestra botón "Anterior" si no estás en la primera página
            if ($paginaActual > 1) {
                echo '<li class="page-item"><a class="page-link" href="?pagina=' . ($paginaActual - 1) . '">Anterior</a></li>';
            }

            // Muestra números de página
            for ($i = 1; $i <= $totalPaginas; $i++) {
                echo '<li class="page-item ' . ($i == $paginaActual ? 'active' : '') . '"><a class="page-link" href="?pagina=' . $i . '">' . $i . '</a></li>';
            }

            // Muestra botón "Siguiente" si no estás en la última página
            if ($paginaActual < $totalPaginas) {
                echo '<li class="page-item"><a class="page-link" href="?pagina=' . ($paginaActual + 1) . '">Siguiente</a></li>';
            }
            ?>
        </ul>


    </div>

</body>

</html>
<?php include './template/footer.php'; ?>