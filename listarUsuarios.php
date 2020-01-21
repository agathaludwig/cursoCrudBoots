<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <title> Lista de usuários ativos </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/bb54122f21.js" crossorigin="anonymous"></script>
</head>

<body>
<?php
session_start();
$usuario = $_SESSION['usuario'];

if(!isset($_SESSION['usuario'])) {
  header('Location: index.php');
}
?>
  <div class="container" style="margin-top: 40px">
    <h3> Lista de usuários ativos </h3>
    <br>
    <table class="table">
    <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">E-mail</th>
          <th scope="col">Nível de acesso</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>

      <?php
      include 'conexao.php';
      $sql = "SELECT * FROM `usuario` WHERE status='Ativo'";
      $busca = mysqli_query($conexao, $sql);

      while ($array = mysqli_fetch_array($busca)) {
        $idusuario = $array['idusuario'];
        $nomeusuario = $array['nomeusuario'];
        $emailusuario = $array['emailusuario'];
        $nivelusuario = $array['nivelusuario'];
      ?>
        <tr>
          <td><?php echo $nomeusuario ?></td>
          <td><?php echo $emailusuario ?></td>
          <td><?php 
            if ($nivelusuario == 1) {
                echo "Administrador";
            }
            if ($nivelusuario == 2) {
                echo "Funcionário";
            }
            if ($nivelusuario == 3) {
                echo "Conferente";          
            }
            ?></td>

          <td><a class="btn btn-warning btn-sm" style="color:#fff" href="editarUsuario.php?id=<?php echo $idusuario ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
            <a class="btn btn-danger btn-sm" style="color:#fff" href="_deletarUsuario.php?id=<?php echo $idusuario ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a></td>
        <?php } ?>
        </tr>
    </table>
    <div style="text-align: right">
      <a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>