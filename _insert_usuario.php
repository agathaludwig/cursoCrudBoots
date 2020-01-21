<?php

include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$emailusuario = $_POST['emailusuario'];
$senhausuario = $_POST['senhausuario'];
$nivelusuario = $_POST['nivelusuario'];
$status = "Ativo";

$sql = "INSERT INTO `usuario`(`nomeusuario`, `emailusuario`, `senhausuario`, `nivelusuario`, `status`) VALUES ('$nomeusuario','$emailusuario',sha1('$senhausuario'),$nivelusuario,'$status')";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px">
    <center>
        <h4>Usuário cadastrado com sucesso! </h4>
    </center>
    <div style="text-align: right; padding-top: 20px">
      <a href="cadastro_usuario.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo</a>
      <a href="menu.php" role="button" class="btn btn-sm btn-success">Menu</a>
    </div>
        </center>
    </div>
</div>