<?php
session_start();
include("includes/dbcon.php");
if (isset($_POST['submit']))
{
    $sql="UPDATE tb_produto SET nome_produto = '".$_POST['sno']."', valor_produto = '".$_POST['type']."', qtd_produto = '".$_POST['qty']."', qtd_produto = qtd_produto + '".$_POST['addqty']."' WHERE id = '".$_GET['id']."'";
    //$a=1;
    mysqli_query($con, $sql);
header('Location: estoque.php');
}
?>