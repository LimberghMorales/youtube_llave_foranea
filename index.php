<?php
    require_once("conexion.php");
    $PDO = (new conexion)->PDO();
    $statement = $PDO->prepare("select * from categoria");
    $statement->execute();
    $registros = $statement->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesar.php" method="post">
        <input type="text" required name="nombre" id="">
        <select name="categoria" required>
        <option value="">Selecciona una opcion</option>
        <?php foreach($registros as $registro): ?>
        <option value="<?php echo $registro["id"]?>"><?= $registro["nombre"]?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="enviar">
    </form>
</body>
</html>