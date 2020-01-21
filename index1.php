<?php
include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senhainformada = $_POST['senha'];

$sql = "SELECT emailusuario, senhausuario, status  FROM usuario WHERE emailusuario = '$usuario'";
$buscar = mysqli_query($conexao, $sql);

echo $total = mysqli_num_rows($buscar);

while ($array = mysqli_fetch_array($buscar)) {
    $senha = $array['senhausuario'];
    $senhadecodificada = sha1($senhainformada);

    if ($total > 0 && $array['status'] == 'Ativo') {
        
        if ($senha == $senhadecodificada) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            header("Location: menu.php");    
        }
        else {
            header("Location: erroSenha.php");
        }
    }
    else {
        echo "teste";
        header("Location: erro.php");
    }
}
?>