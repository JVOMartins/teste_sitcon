<?php require('conecta.php');
$procedimento_cot = $_POST['proc'];
$select_tbcotacao = "SELECT * FROM cotacao WHERE id_procedimento = $procedimento_cot;";
$select_tbcotacao = mysqli_query($con,$select_tbcotacao);
$soma_valores = 0;
$maior_valor = 0;
$menor_valor;
$i=0;
while ($result_cot =mysqli_fetch_array($select_tbcotacao)) {
  $id_cot = $result_cot['id_cotacao'];
  $id_proc = $result_cot['id_procedimento'];
  $nome_forn = $result_cot['nome_forn'];
  $valor = $result_cot['valor_cotacao'];
  $soma_valores+=$valor;
  if($valor > $maior_valor){
    $maior_valor = $valor;
  }
  if(!isset($menor_valor)){
    $menor_valor = $valor;
  }else if($menor_valor > $valor){
    $menor_valor=$valor;
  }
  $valor_cmp_media[$i] = $valor;
  $i++;
}
$num_linhas = mysqli_num_rows($select_tbcotacao);
$media = $soma_valores / $num_linhas;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado Cotacao</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <h1 class="container-fluid p-5 bg-primary text-white text-center">Resultado da Cotação</h1>
</head>

<body>



</body>

</html>