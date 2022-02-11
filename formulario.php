<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css"></link>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Formulario</title>
</head>
<body>
<div class="nav">
        <a href="index.php">Especies favoritas</a>
        <a href="#">Agrega tu especie</a>
    </div>

    <div class="con">
        <h1>Tu especie</h1>
        <form method="get" action="store.php">
            <h2><label>Nombre</label></h2>
            <input type="text" name="nombre" placeholder="Nombre de la especie"> 

            <h2><label>Descripción</label></h2>
            <textarea name="descripcion" rows="5" placeholder="Describe a la especie"></textarea>

            <h2><label>Fotografia</label></h2>
            <input type="text" name="fotografia" placeholder="Copia una URL aquí"> 

            <button>Guardar</button>            
        </form>
    </div>

    <div class="footer">
       
    </div>
</body>
</html>