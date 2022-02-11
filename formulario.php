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
        <a href="index.php">Indice</a>
        <a href="#">Formulario</a>
    </div>

    <div class="con">
        <h1>Contacto</h1>
        <form method="get" action="index.html">
            <h2><label>Nombre</label></h2>
            <input type="text" name="nombre" placeholder="Pepe"> 
            
            <h2><label>Correo</label></h2>
            <input type="mail" name="correo" placeholder="tu.correo@aqui.com" required> 
            
            <h2><label>Genero</label></h2>
            <input type="radio" id="mujer" value="mujer" name="genero"><label for="mujer">Mujer</label>
            <input type="radio" id="hombre" value="hombre" name="genero"><label for="hombre">Hombre</label>
            <input type="radio" id="nobinario" value="nobinario" name="genero"><label for="nobinario">No binario</label>

            <h2><label>Contraseña</label></h2>
            <input type="password" name="contraseña" placeholder="Esfuerazate y colocale una buena" required>

            <h2><label>Comentario</label></h2>
            <textarea name="comentario" rows="5" placeholder="Dime lo que piensas del sitio"></textarea>

            <h2><label>Ciudad</label></h2>
            <select name="ciudad">
                <option value="guadalajara">Guadalajara</option>
                <option value="zapopan">Zapopan</option>
                <option value="tonala">Tonalá</option>
                <option value="otra">Otra</option>
            </select>

            <input type="checkbox" id="interesado" name="interesado">
            <label for="interesado">Me interesa contratarte</label>

            <button>Enviar</button>            
        </form>
    </div>

    <div class="footer">
       
    </div>
</body>
</html>