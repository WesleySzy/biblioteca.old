<?php
$host="localhost";
$user="u582146562_szy";
$banco="u582146562_bibli";
$pass="BOHdinhu6991";
$conexao=mysqli_connect("localhost", "u582146562_szy", "BOHdinhu6991") or die ("Banco de Dados Off_line"); //mysql_error()
mysqli_select_db($conexao, $banco) or die ("Banco de Dados não conectado");
?>
<?php
$consulta =mysqli_query($conexao, "SELECT * FROM aluno");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tutorial</title>
</head>
<body>
  <table border="1">
    <tr>
      <td>Nome Funcionário</td>
      <td>Endereço Do Funcionário</td>
      <td>Telefone do Funcionário</td>
     
    </tr>
    <?php while($dado = $consulta->fetch_array()) { ?>
    <tr>
      <td><?php echo $dado['nome_funcionario']; ?></td>
      <td><?php echo $dado['endereco_funcionario']; ?></td>
      <td><?php echo $dado['telefone_funcionario']; ?></td>
     
  
      </td>
    </tr>
    <?php } ?>
  </table>
<a href="javascript:history.back()">Voltar</a>
</body>
</html>