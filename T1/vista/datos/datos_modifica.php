<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo$data["titulo"]; ?></title>
</head>
<body>
    
    <h2><?php echo$data["titulo"]; ?></h2>

    <form id="nuevo" name="nuevo" method="POST" action="index.php?c=Datos&a=actualizar" autocomplete="off">

        <input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />

        Cédula: <input tipe:"text" id="cedula" name="cedula" /><br>
        Nombre: <input tipe:"text" id="nombre" name="nombre" /><br>
        Apellido: <input tipe:"text" id="apellido" name="apellido" /><br>
        Fecha Nacimiento: <input tipe:"text" id="fecha_nacimiento" name="fecha_nacimiento" /><br>
        Usuario: <input tipe:"text" id="usuario" name="usuario" /><br>
        Clave: <input tipe:"text" id="clave" name="clave" /><br>

        <button id="guardar" name="guardar" type="submit">Guardar</button>
    
    </form>

</body>
</html>