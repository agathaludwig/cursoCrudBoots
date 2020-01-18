<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <title> Adicionar Fornecedor </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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

  <div class="container" id="tamanhoContainer" style="margin-top: 40px">
    <h4> Cadastro de Fornecedor</h4>
    <form action="_inserirFornecedor.php" method="post" style="margin-top: 20px">

      <div class="form-group">
        <label> Nome do fornecedor </label>
        <input type="text" class="form-control" name="nomefornecedor" placeholder="Nome" autocomplete="off" required>
      </div>

      <div style="text-align: right">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>