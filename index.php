<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css"></link>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Especies</title>
</head>
<body>
    <?php
    include('conection.php');
    ?>

    <div class="nav">
        <a href="#">Especies favoritas</a>
        <a href="formulario.php">Agrega tu especie</a>
    </div>

    <div class="con">
        <h2>Las especies favoritas</h2>
        <table>
            <thead>
                <tr>
                    <th>Fotografia</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT fotografia,nombre,descripcion FROM especies";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();

                    $stmt->setFetchMode(PDO::FETCH_ASSOC);

                    foreach($stmt->fetchAll() as $row) {
                        echo '<tr>
                            <th><img src="' . $row['fotografia'] . '"></th>
                            <th>' . $row['nombre'] . '</th>
                            <th class="description">' . $row['descripcion'] . '</th>
                        </tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>