<?php include ("includes/header.php");?>
<?php
if (isset($_POST['submit']))
{
    $sql="INSERT INTO tb_produto (nome_produto, valor_produto, qtd_produto) VALUES ( '".$_POST['nome']."', '".$_POST['valor']."', '".$_POST['qtd']."' )";
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
                  <input type="text" name="nome" required class="form-control" placeholder="Entre com o nome do produto">
                </div>
                <div class="form-group">
                  <label>Valor</label>
                  <input type="text" name="valor" class="form-control" placeholder="Entre com o valor do produto" >
                </div>
                <div class="form-group">
                  <label>Quantidade</label>
                  <input type="number" name="qtd" required class="form-control" placeholder="Entre com a quantidade do produto" >
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