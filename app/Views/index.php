<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelicula</title>
</head>
<body>
    <h2>lista de peliculas</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Pelicula</th>
            <th>Descripcion</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
        <tr>

        <?php foreach($pelicula as $p): ?>
        
            <tr>
                <td>1</td>
                <td><?php echo $p['titulo']?></td>
                <td><?php echo $p['descripcion']?></td>
              

            </tr>
            <?php endforeach;?>
     </table>       
</body>
</html>