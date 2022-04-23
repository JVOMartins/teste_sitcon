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
  <h1 class="container-fluid p-5 bg-primary text-white text-center">Cotação</h1>
</head>

<body>
  <form action="" method="POST" id="cotacao" name="cotacao">
    <div class="container">
      <div class="row align-items-center my-auto">
        <div class="col text-center">
          <h1 class="h3">Selecione o procedimento: </h1>
        </div>
      </div>
      <div class="row align-items-center my-auto">
        <div class="col input-group input-group-sm mb-3 text-center d-flex flex-nowrap"><span class="input-group-text" id="inputGroup-sizing-sm">Procedimento:</span>
          <select name="proc" id="proc" required class="form-select" type="text">
            <?php
            $options = mysqli_query($con, "SELECT * FROM procedimentos");
            while ($resultado = mysqli_fetch_array($options)) {
              $id = $resultado['id'];
              $nome_proc = $resultado['descricao'];
              echo "<option value='$id'>$nome_proc</option>";
            }
            ?>
          </select>
        </div>
        <br>
        <div class="row align-items-center my-auto">
        <div class="col text-start">
          <button class="btn btn-primary" formaction="index.php">Voltar</button>
        </div>
        <div class="col text-end">
          <button class="btn btn-primary" type="submit" formaction="resultado_cotacao.php">Avançar</button>
        </div>
      </div>

      </div>
    </div>
    </div>
  </form>
</body>

</html>