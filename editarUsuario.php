<?php
include "conexao.php";
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title> Editar Usuário </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

  <div class="container" style="margin-top: 40px; width: 500px">
    <h4> Editar Usuário </h4>
    <form action="_atualizarUsuario.php" method="post" style="margin-top: 20px">
      <?php
      $sql = "SELECT * FROM `usuario` WHERE idusuario = $id ";
      $busca = mysqli_query($conexao, $sql);
      while ($array = mysqli_fetch_array($busca)) {
        //$idusuario = $array['idusuario'];
        $nomeusuario = $array['nomeusuario'];
        $emailusuario = $array['emailusuario'];
        $nivelusuario = $array['nivelusuario'];
      ?>
        <div class="form-group">
          <label> Nome </label>
          <input type="text" class="form-control" name="nomeusuario" value="<?php echo $nomeusuario ?>" disabled>
          <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
        </div>
        <div class="form-group">
          <label> Email </label>
          <input type="text" class="form-control" name="emailusuario" value="<?php echo $emailusuario ?>" disabled>
        </div>
        <div class="form-group">
        <label> Nível de Acesso</label>
        <select class="form-control" name="nivelusuario">
        <!-- <optgroup> agrupa as opções do option -->
          <option value="1">Administrador</option>
          <option value="2">Funcionário</option>
          <option value="3">Conferente</option>
        </select>
        <!-- FIXME Como deixar a opção já selecionada -->
      </div>

      <?php } ?>
      <div style="text-align: right">
       <a href="listarUsuarios.php" role="button" class="btn btn-sm btn-primary">Voltar</a> 
       <button type="submit" class="btn btn-sm btn-danger" id="botao">Atualizar</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>