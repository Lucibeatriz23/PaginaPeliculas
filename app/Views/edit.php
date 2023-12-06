<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tituloPagina;?></title>
</head>
<body>
    <h3>Editando informacion</h3>
    <form action="" method="post">

    <div class ="col">
        <label for="Nombre de la pelicula">Nombre de la pelicula:</label>
        <input type="text" name="nombrePelicula" id="nombrePelicula" value="<?php echo $pelicula['titulo'];?>">

    </div>
    <label for="descripcionPelicula">Descripcion de la pelicula:</label>
        <textarea name="descripcionPelicula" id="descripcionPelicula" cols="30" rows="10"><?php echo $pelicula['descripcion'];?></textarea>


    </form>
</body>
</html>