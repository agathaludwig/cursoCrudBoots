<?php
include "conexao.php";
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <title> Editar Fornecedor </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <style type="text/css">
    #tamanhoContainer {
      width: 500px;
    }

    #botao {
      background-color: #FD7B23;
      color: #ffffff;
      font-weight: bold;
    }
  </style>

</head>

<body>
<?php
session_start();
$usuario = $_SESSION['usuario'];

if(!isset($_SESSION['usuario'])) {
  header('Location: index.php');
}
?>
  <div class="container" id="tamanhoContainer" style="margin-top: 40px">
    <h4> Editar Fornecedor </h4>
    <form action="_atualizarFornecedor.php" method="post" style="margin-top: 20px">
      <?php
      $sql = "SELECT * FROM `fornecedor` WHERE idfornecedor = $id ";
      $busca = mysqli_query($conexao, $sql);
      while ($array = mysqli_fetch_array($busca)) {
        $idfornecedor = $array['idfornecedor'];
        $nomefornecedor = $array['nomefornecedor'];
      ?>
        <div class="form-group">
          <label> Nome do fornecedor </label>
          <input type="text" class="form-control" name="nomefornecedor" value="<?php echo $nomefornecedor ?>">
          <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
        </div>

      <?php } ?>
      <div style="text-align: right">
        <button type="submit" id="botao" class="btn btn-sm" id="botao">Atualizar</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>