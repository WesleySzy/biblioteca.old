<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Listagem de Livros</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    
 <div class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
 
      <!-- Be sure to leave the brand out there if you want it shown -->
      <a class="brand" href="home.php">Home</a>
      
      
      <a class="brand" href="visao/cadastrar_aluno.php">Cadastrar Aluno</a>
      <a class="brand" href="visao/formulario_cadastro_func.php">Cadastrar Funcionário</a>
      <a class="brand" href="visao/form_emprestimos.php">Controlar Empréstimos</a>
      <a class="brand" href="visao/show_livro.php">Relatório De Livros</a>
      <a class="brand" href="visao/show_alunos.php">Relatório De Alunos</a>
      <a class="brand" href="visao/show_funcionarios.php">Relatório De Funcionários</a>
 
    <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse">
        <!-- .nav, .navbar-search, .navbar-form, etc -->
      </div>
 
  </div>
</div>
</div>

<h1 class="well" align="center">Listagem de Livros</h1>
 <div class="container-fluid">
    <table class="table table-hover">
    <thead>
        <tr>
        <th>ISBN</th>
        <th>Título</th>
        <th>Autor</th>
        <th>Categoria</th>
        <th>Ações</th>
    </tr>

    </thead>

    <?php foreach ($livros as $livro) { ?>
    <tbody>
    <tr>
        <td><?= $livro -> getIsbn() ?></td>
        <td><?= $livro -> getTitulo() ?></td>
        <td><?= $livro -> getAutor() ?></td>
        <td><?= $livro -> getCategoria() ?></td>
        <td>
        <a class="btn btn-small" rel="tooltip" data-placement="bottom" title="Editar Livro" id="editar" href="home.php?controlador=livro&acao=altera&id=<?= $livro -> getId() ?>"><i class="icon-pencil"></i></a> |
        <a class="btn btn-small" rel="tooltip" data-placement="bottom" title="Excluir Livro" id="excluir"  href="home.php?controlador=livro&acao=deleta&id=<?= $livro -> getId() ?>" onclick="return confirm('Confirma exclusão?')"><i class="icon-trash"></i></a>
        </td>
    </tr>
    </tbody>
    <?php } ?>

</table>
<p class="well alignMiddle"><a rel="tooltip" data-placement="bottom" title="Cadastrar Livro" id="cadastro" href="#myModal" role="button" data-toggle="modal" class="btn btn-primary">Cadastrar Livro</a></p>

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel" class="alignMiddle">Cadastrar Livro</h3>
  </div>
  <div class="modal-body">
    <form class="form-horizontal well" action="home.php" method="POST" >
            <input type="hidden" name="acao" value="insere_processa" />
            <?php
            require_once ('formulario_cadastro.php');
            ?>
        </form>
  </div>

  <div class="modal-footer">
    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Fechar</button>
    
  </div>
</div>

</div>

<div class="navbar navbar-fixed-bottom  well">
    <p class="alignMiddle">
        Wesley
    </p>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#cadastro, #editar, #excluir').tooltip()
    });
</script>
</body>
</html>
