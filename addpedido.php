<?php include ("includes/header.php");?>
<?php
if (isset($_POST['submit']))
{
  $sql="INSERT INTO tb_pedido (nome_pedido, item_pedido, valor_pedido, status_pedido) VALUES ( '".$_POST['nome']."', '".$_POST['items']."', '".$_POST['valor']."', '".$_POST['status']."' )";
    //$a=1;
  if (mysqli_query($con, $sql)) {
    //if ($a == 1) {
    echo " ?><div class='rowzzz'>
    <div class='alert alert-success alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    <h4><i class='icon fa fa-check'></i> Alert!</h4>
    Success
    </div></div>
    <?php ";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}
else 
{
  echo "NOT isset submit";
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Adicionar Novo Produto Na Loja
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Adicionar Produto</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Novo Item</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <form role="form" name="submit" action="" method="post">
          <!-- text input -->
          <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" required class="form-control" placeholder="Entre com o nome do cliente">
          </div>
          <div class="form-group">
            <label for="address">Itens</label>
            <textarea class="form-control" rows="5" name="items" id="items" placeholder="Itens"></textarea>
          </div>
          <div class="form-group">
            <label>Valor</label>
            <input type="text" name="valor" class="form-control" placeholder="Entre com o valor total" >
          </div>
          <div class="form-group">
            <label>Status de entrega</label>
            <input type="number" name="status" required class="form-control" placeholder="Entre com o status de entrega" >
          </div>
          <div class="box-footer">
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar" />
          </div>
        </form>
      </div>
      <!-- /.box-body -->
    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include ("includes/footer.php");?>