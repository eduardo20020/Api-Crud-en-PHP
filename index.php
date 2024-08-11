<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar lecciones</title>
</head>
<body>
    <form action="api/ingresarleccion.php" method="post">
        <label>Dame el titulo de la leccion: </label>
        <input type="text" name="leccion">

        <label>Dame el contenido: </label>         
        <textarea name="contenido"></textarea>

        <label>Dame los ejemplos para el usuario: </label>
        <textarea name="ejemplos"></textarea>

        <label>Dame los recursos(libros/videos)</label>
        <input type="text" name="recursos">

        <input type="submit" value="enviar">
    </form>
</body>
</html>

