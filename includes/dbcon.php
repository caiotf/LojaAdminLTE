<?php
$con = mysqli_connect("localhost","root","123456","testedb");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Falha na conexão com banco de dados: " . mysqli_connect_error();
  }
?>
