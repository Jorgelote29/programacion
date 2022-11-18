<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo$data["titulo"]; ?></title>
</head>
<body>
    
    <h2><?php echo$data["titulo"]; ?></h2>

    <a href="index.php?c=Datos&a=nuevo">Registrar</a>
    <br>
    <br>

    <table border="1" widht="80%">
        <thead>
            <tr>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha Nacimiento</th>
                <th>Usuario</th>
                <th>Clave</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($data["datos"] as $dato) {
                echo "<tr>";
                echo "<td>".$dato["cedula"]."</td>";
                echo "<td>".$dato["nombre"]."</td>";
                echo "<td>".$dato["apellido"]."</td>";
                echo "<td>".$dato["fecha_nacimiento"]."</td>";
                echo "<td>".$dato["usuario"]."</td>";
                echo "<td>".$dato["clave"]."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>

    </table>

</body>
</html>