<?php

include 'conexao.php';

$id = $_POST['id'];
$nomecategoria = $_POST['nomecategoria'];

$sql = "UPDATE `categoria` SET `nomecategoria`='$nomecategoria' WHERE idcategoria = $id";

$atualizar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px">
    <center>
        <h4>Categoria alterada com sucesso! </h4>
    </center>
    <div style="padding-top: 20px">
        <center>
            <a href="listarCategorias.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </center>
    </div>
</div>
