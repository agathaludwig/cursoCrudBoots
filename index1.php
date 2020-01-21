<?php
include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senhainformada = $_POST['senha'];

$sql = "SELECT emailusuario, senhausuario  FROM usuario WHERE emailusuario = '$usuario'";
$buscar = mysqli_query($conexao, $sql);

echo $total = mysqli_num_rows($buscar);

while ($array = mysqli_fetch_array($buscar)) {
    $senha = $array['senhausuario'];
    $senhadecodificada = sha1($senhainformada);


    if ($total > 0) {
        echo "teste";
        if ($senha == $senhadecodificada) {
            header("Location: menu.php");    
        }
        else {
            header("Location: erroSenha.php");
        }
    }
    else {
        header("Location: erro.php");
    }
}
?>