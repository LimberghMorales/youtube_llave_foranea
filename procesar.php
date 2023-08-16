<?php
    require_once("conexion.php");
    $PDO= (new conexion)->PDO();
    $statement = $PDO->prepare("insert into post value(null, :nombre, :categoria)");
    $statement->bindParam(":nombre",$_POST["nombre"]);
    $statement->bindParam(":categoria",$_POST["categoria"]);
    return ($statement->execute())? header("location:index.php") : header("location:error.php");
?>