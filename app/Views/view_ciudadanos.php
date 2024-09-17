<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Ciudadanos</title>
</head>

<body>
    <table class="table table-resposive table-dark table-hover text-center">
        <thead>
            <tr class="table-dark table-active text-uppercase text-white text-center">
                <th>DPI</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Tel_Casa</th>
                <th>Tel_Móvil</th>
                <th>Email</th>
                <th>Fecha Nacimiento</th>
                <th>Nivel Académico</th>
                <th>Lugar Nacimiento</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($datos as $fila){              
            ?>
            <tr class="table table-active text-dark">
                <td><?php echo $fila['dpi'] ?></td>
                <td><?php echo $fila['apellido'] ?></td>
                <td><?php echo $fila['nombre'] ?></td>
                <td><?php echo $fila['direccion'] ?></td>
                <td><?php echo $fila['tel_casa'] ?></td>
                <td><?php echo $fila['tel_movil'] ?></td>
                <td><?php echo $fila['email'] ?></td>
                <td><?php echo $fila['fechanac'] ?></td>
                <td><?php echo $fila['cod_nivel_acad'] ?></td>
                <td><?php echo $fila['lugar_nacimiento'] ?></td>
                <td>
                    <a href="#">Actualizar</a>
                    /
                    <a href="#">Eliminar</a>
                </td>
            </tr>
            <?php
               }
                ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>