<?php
$host="localhost";
$user="root";
$banco="biblioteca";
$conexao=mysqli_connect("localhost", "root", "") or die ("Banco de Dados Off_line"); //mysql_error()
mysqli_select_db($conexao, $banco) or die ("Banco de Dados não conectado");
?>
<?php
$consulta =mysqli_query($conexao, "SELECT * FROM livro");
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
      <td>Código</td>
      <td>Nome</td>
      <td>E-mail</td>
     
    </tr>
    <?php while($dado = $consulta->fetch_array()) { ?>
    <tr>
      <td><?php echo $dado['isbn']; ?></td>
      <td><?php echo $dado['titulo']; ?></td>
      <td><?php echo $dado['autor']; ?></td>
     
  
      </td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>