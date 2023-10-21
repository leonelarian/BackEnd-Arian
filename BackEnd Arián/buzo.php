<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tienda de ropa</h1>
    <h2>2.b.</h2>

    <br>
    <br>
    <a href="listarencards.php">Inicio</a>
    <a href="listar.php">Listado</a>
    <a href="buzo.php">Buzo</a>
    <a href="marca.php">Marca</a>
    <a href="precio.php">Precio</a>

    <br>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
    </tr>
    <?php
    // 1) Conexion
    $conexion=mysqli_connect("127.0.0.1","root",""); 
    mysqli_select_db($conexion,"tienda");

    // 2) Preparar la orden SQL
    // Sintaxis SQL SELECT
    // SELECT * FROM nombre_tabla
    // => Selecciona todos los campos de la siguiente tabla
    // SELECT campos_tabla FROM nombre_tabla
    // => Selecciona los siguientes campos de la siguiente tabla
    $consulta="SELECT*FROM ropa WHERE prenda = 'buzo'" ;

    // 3) Ejecutar la orden y obtenemos los registros

    $datos= mysqli_query ($conexion, $consulta);
    // 4) Mostrar los datos del registro


    while ( $fila=mysqli_fetch_array($datos) ) { ?>
        <tr>
        <td><?php echo $fila['id']; ?></td>
        <td><?php echo $fila['prenda']; ?></td>
        <td><?php echo $fila['marca']; ?></td>
        <td><?php echo $fila['talle']; ?></td>
        <td><?php echo $fila['precio']; ?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>
