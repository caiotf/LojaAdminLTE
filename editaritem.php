<?php include ("includes/header.php");?>
<?php
$values = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_produto WHERE id = '".$_GET['id']."'"));
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Adicionar novo item na loja
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Editar item</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Item da Loja</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" name="submit" action="editsuccess1.php?id=<?php echo $_GET['id'];?>" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>Nome do produto</label>
                  <input type="text" name="sno" required class="form-control" value="<?php echo $values['nome_produto']; ?>">
                </div>
                <div class="form-group">
                  <label>Valor do produto</label>
                  <input type="text" name="type" class="form-control" value="<?php echo $values['valor_produto']; ?>" >
                </div>
                <div class="form-group">
                  <label>Quantidade disponível</label>
                  <input type="number" name="qty" required class="form-control" value="<?php echo $values['qtd_produto']; ?>" >
                </div>
                <div class="form-group">
                  <label>Adicionar quantidade</label>
                  <input type="number" name="addqty" required class="form-control" value="" >
                </div>
                <div c
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