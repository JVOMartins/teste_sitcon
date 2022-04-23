<?php require('conecta.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro Procedimentos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <h1 class="container-fluid p-5 bg-primary text-white text-center">Cadastro de Procedimentos</h1>
</head>

<body>
  <form action="salvarprocedimento.php" method="POST" name="novoprocedimento" id="novoprocedimento">
    <div class="container">
      <div class="row align-items-center my-auto">
        <div class="col input-group input-group-sm mb-3 text-center d-flex flex-nowrap"><span class="input-group-text" id="inputGroup-sizing-sm">Nome do Procedimento:</span><input name="proc" id="proc" required class="form-control" type="text"></div>
      </div>
      <div class="row align-items-center my-auto">
        <div class="col text-center"><button type="submit" value="submit" name="salvar" id="salvar" class="btn btn-primary">Salvar</button></div>
      </div>
      <br>
      <div class="row align-items-center my-auto">
        <div class="col text-center"><button type="submit" value="ignore" name="voltar" id="voltar" formaction="index.php" class="btn btn-primary " formnovalidate>Voltar</button></div>
      </div>
    </div>
  </form>
  <?php
  $ac = $_GET['ac'] ?? "";
  if (!empty($ac)) {
    if ($ac == 's') {
      echo "<div class='text-center my-auto'><h3 class='h3'>O procedimento foi cadastrado com sucesso!</h3></div>";
    } else if ($ac == 'f') {
      echo "<div class='text-center my-auto'><h3 class='h3'>Houve um erro ao cadastrar o procedimento!</h3></div>";
    } else {
    }
  }
  ?>
  
</body>

</html>