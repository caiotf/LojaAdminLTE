<?php include("includes/header.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pedidos Pendentes
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pedidos Pendentes</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Cliente</th>
                  <th>Endereço</th>
                  <th>Data de Entrega</th>
                  <th>Valor total</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = mysqli_query($con,"SELECT * FROM orders WHERE status = 0");
                while($result = mysqli_fetch_array($sql))
                {
                ?>
                <tr>
                  <td>ORDER#<?php echo $result['id'] ?></td>
                  <td><?php echo $result['name'] ?></td>
                  <td><?php echo $result['del_date'] ?></td>
                  <td><a class="btn btn-block btn-default" href="editorder.php?id=<?php echo $result['id']; ?>"><i class="fa fa-edit"></i> Edit</a></td>
                  <td><a class="btn btn-block btn-default" href="vieworder.php?id=<?php echo $result['id']; ?>"><i class="fa fa-eye"></i> View</a></td>
                  <td><a class="btn btn-block btn-danger" href="deleteorder.php?id=<?php echo $result['id']; ?>"><i class="fa fa-trash"></i> Delete</a></td>
                </tr>
                <?php 
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Cliente</th>
                  <th>Endereço</th>
                  <th>Data de Entrega</th>
                  <th>Valor total</th>
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