<?php require('conecta.php');

  $lista_procedimentos = mysqli_query($con,"SELECT * FROM procedimentos;");
  while($resultado = mysqli_fetch_array($lista_procedimentos)){
    $id = $resultado['id'];
    $nome_proc = $resultado['descricao'];
    echo "<tr><td>$id</td><td>$nome_proc</td></tr>";
  }
  
?>