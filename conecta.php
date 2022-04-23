<?php

$servername = "localhost";
$database = "modulo_cotacao";
$username = "root";
$password = "";

$con =  mysqli_connect($servername, $username, $password, $database);
if (mysqli_connect_errno()) {
    echo "Falha na conexão MySQL: " . mysqli_connect_error();
    exit();
  }else{
      echo '<script>console.log("Conexão estabelecida com sucesso!")</script>';
  }