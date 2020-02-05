<?php

include 'conexao.php';

$id = $_GET['id'];
$nivel = $_GET['nivel'];

if ($nivel == 1) {
    $sql = "UPDATE `usuario` SET `status`= 'Ativo', `nivelusuario`= 1 WHERE idusuario = $id";
    $atualizar = mysqli_query($conexao, $sql);
    $nivel = "Administrador";
}
if ($nivel == 2) {
    $sql = "UPDATE `usuario` SET `status`= 'Ativo', `nivelusuario`= 2 WHERE idusuario = $id";
    $atualizar = mysqli_query($conexao, $sql);
    $nivel = "Funcionário";
}
if ($nivel == 3) {
    $sql = "UPDATE `usuario` SET `status`= 'Ativo', `nivelusuario`= 3 WHERE idusuario = $id";
    $atualizar = mysqli_query($conexao, $sql);
    $nivel = "Conferente";
}


?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px">
    <center>
        <h4><?php echo $nivel ?> cadastrado com sucesso! </h4>
    </center>
    <div style="padding-top: 20px">
        <center>
            <a href="aprovarUsuarios.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </center>
    </div>
</div>