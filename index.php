<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css"></link>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Acerca de mi</title>
</head>
<body>
    <div class="nav">
        <a href="#">Indice</a>
        <a href="formulario.php">Formulario</a>
    </div>

    <div class="con">
        <h2>Mis proyectos</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Lenguaje(s)</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>MusicApp</th>
                    <th>
                        <ul>
                            <li>Javascrip > Angular & Ionic</li>
                            <li>Python > Flask</li>
                        </ul>
                    </th>
                    <th class="description">Pequeña aplicación web y movil que interactura con un API que porporcionara información de canciones, artistas y álbumes. Ádemas, esta permitiria hacer reseñas a álbumes y dejaria a sus usuarios tener lista de favoritos, además de poder subir datos de nuevas canciones.</th>
                </tr>
                <tr>
                    <th>Tiendita</th>
                    <th>Python > PySide2</th>
                    <th class="description">Aplicación de escritorio en forma de punto de venta que permitiera tener un inventario de los productos que se tienen y, lo mas importante, poder facilitar los calculos y generar registros de las ventas</th>
                </tr>
                <tr>
                    <th>Localizador vacunación</th>
                    <th>Python</th>
                    <th class="description">Pequeña aplicación que permitia recuperar mapas de OpenStreetMaps y generar un grafo que mas tarde serviria para buscar, mediante el algoritmo de Dijkstra, encontrar el centro de vacunación mas cercano a tu ubicación.</th>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>