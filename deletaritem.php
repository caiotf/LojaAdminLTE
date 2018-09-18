<?php
session_start();
include("includes/dbcon.php");
$sql = "DELETE FROM tb_produto WHERE id='".$_GET['id']."'";
mysqli_query($con, $sql);
header("Location: estoque.php");
?>