<?php require('conecta.php');
$novoprocedimento = $_POST['proc'];
echo "Valor da variável: ".$novoprocedimento;
var_dump($novoprocedimento);
if(!isset($novoprocedimento) || $novoprocedimento == ""){
  header('Location: cadastroproc.php?ac=f');
  exit;
}
  $insert = mysqli_query($con,"INSERT INTO procedimentos (descricao) VALUES ('$novoprocedimento');");
  header('Location: cadastroproc.php?ac=s');
  exit;
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>salvarprocedimento</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
  
</body>
</html>