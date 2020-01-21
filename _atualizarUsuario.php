<?php

include 'conexao.php';

$id = $_POST['id'];
$nivelusuario = $_POST['nivelusuario'];

$sql = "UPDATE `usuario` SET `nivelusuario`='$nivelusuario' WHERE idusuario = $id";

$atualizar = mysqli_query($conexao, $sql);

header("Location: listarUsuarios.php"); //Redireciona a pagina
?>
