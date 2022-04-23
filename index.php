<?php require('conecta.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cotacao</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <h1 class="container-fluid p-5 bg-primary text-white text-center">Cotação de Procedimentos</h1>
</head>

<body>
  <br>
  <form action="">
    <div class="container h-100">
      <div class="row align-items-center my-auto">
        <div class="col text-center"><button class="btn btn-primary" formaction="cadastroproc.php">Cadastro Procedimento</button></div>
        <div class="col text-center"><button class="btn btn-primary" formaction="cadastro_forn_cot.php">Cadastro Cotação Fornecedor</button></div>
        <div class="col text-center"><button class="btn btn-primary" formaction="cotacao.php">Cotações</button></div>
      </div>
    </div>
  </form>
</body>

</html>