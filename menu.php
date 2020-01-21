<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <title> Menu de Estoque </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <div class="container" style="margin-top: 40px">
    <div class="row">

      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar produto</h5>
            <p class="card-text">Opção para adicionar produto em estoque.</p>
            <a href="adicionarProduto.php" class="btn btn-primary">Cadastrar produto</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Lista de produtos</h5>
            <p class="card-text">Opção para visualizar, editar ou excluir os produtos já cadastrados.</p>
            <a href="listarProdutos.php" class="btn btn-primary">Listar produtos</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6" style="margin-top: 20px">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar categoria</h5>
            <p class="card-text">Opção para adicionar novas categorias de produtos.</p>
            <a href="adicionarCategoria.php" class="btn btn-primary">Cadastrar categoria</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6" style="margin-top: 20px">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar fornecedor</h5>
            <p class="card-text">Opção para adicionar novos fornecedores de produtos.</p>
            <a href="adicionarFornecedor.php" class="btn btn-primary">Cadastrar fornecedor</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6" style="margin-top: 20px">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Aprovar cadastro</h5>
            <p class="card-text">Opção para aprovar e nivelar os cadastros de usuários.</p>
            <a href="aprovarUsuarios.php" class="btn btn-primary">Aprovar usuários</a>
          </div>
        </div>
        </div>
        <div class="col-sm-6" style="margin-top: 20px">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Listar usuários ativos</h5>
            <p class="card-text">Opção para visualizar, editar ou deletar usuários ativos.</p>
            <a href="listarUsuarios.php" class="btn btn-primary">Listar usuários</a>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>