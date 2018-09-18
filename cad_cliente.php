<?php include ("includes/header.php");?>
<?php
if (isset($_POST['submit']))
{
    $sql="INSERT INTO tb_cliente (nome_cliente, endereco_cliente) VALUES ( '".$_POST['nome']."', '".$_POST['endereco']."', '".$_POST['qty']."' )";
    //$a=1;
    if (mysqli_query($con, $sql)) {
    //if ($a == 1) {
    echo " ?><div class='rowzzz'>
	       <div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-check'></i> Inserido com sucesso!</h4>
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
        Cadastratar Cliente
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Cadastratar Cliente</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Novo Cliente</h3>
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
                  <label>Endereço</label>
                  <input type="text" name="endereco" class="form-control" placeholder="Entre com o endereço do cliente" >
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