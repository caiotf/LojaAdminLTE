<?php include("includes/header.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Estoque de Produtos
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Estoque Produtos</li>
      </ol>
    </section>

    <!-- Main content -->
        <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="shop" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nome do produto</th>
                  <th>Valor</th>
                  <th>Quantidade</th>
                  <th>Editar</th>
                  <th>Deletar</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = mysqli_query($con,"SELECT * FROM tb_produto");
                while($result = mysqli_fetch_array($sql))
                {
                ?>
                <tr>
                  <td><?php echo $result['nome_produto'] ?></td>
                  <td><?php echo $result['valor_produto'] ?></td>
                  <td><?php echo $result['qtd_produto'] ?></td>
                  <td><a class="btn btn-block btn-default" href="editaritem.php?id=<?php echo $result['id']; ?>"><i class="fa fa-edit"></i> Editar</a></td>
                  <td><a class="btn btn-block btn-danger" href="deletaritem.php?id=<?php echo $result['id']; ?>"><i class="fa fa-trash"></i> Deletar</a></td>
                </tr>
                <?php 
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nome do produto</th>
                  <th>Valor</th>
                  <th>Quantidade</th>
                  <th>Editar</th>
                  <th>Deletar</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include("includes/footer.php"); ?>