  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['user_id']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Pesquisar...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU DE NAVEGAÇÃO</li>
        <li class="treeview <?php if($currentPage =='dashboard' ){echo 'active';}?>">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview <?php if($currentPage =='addproduto' || $currentPage =='addorder' ){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Adicionar Novo</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($currentPage =='addproduto'){echo 'active';}?>"><a href="addproduto.php"><i class="fa fa-circle-o"></i> Produto</a></li>
            <li class="<?php if($currentPage =='addpedido'){echo 'active';}?>"><a href="addpedido.php"><i class="fa fa-circle-o"></i> Pedido</a></li>
            <li class="<?php if($currentPage =='cad_cliente'){echo 'active';}?>"><a href="cad_cliente.php"><i class="fa fa-circle-o"></i> Cliente</a></li>
          </ul>
        </li>
        <!--<li class="treeview <?php if($currentPage =='toshop' || $currentPage =='togodown'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-suitcase"></i> <span>Export Stock</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($currentPage =='toshop'){echo 'active';}?>"><a href="finished.php"><i class="fa fa-circle-o"></i> To Shop</a></li>
            <li class="<?php if($currentPage =='togodown'){echo 'active';}?>"><a href="pending.php"><i class="fa fa-circle-o"></i> To Godown</a></li>
          </ul>
        </li>-->
        <li class="treeview <?php if($currentPage =='estoque'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-table"></i> <span>Ver Produtos</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($currentPage =='estoque'){echo 'active';}?>"><a href="estoque.php"><i class="fa fa-circle-o"></i> Estoque de Produtos</a></li>
          </ul>
        </li>
        <li class="treeview <?php if($currentPage =='pendentes' || $currentPage =='finalizados'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-money"></i> <span>Ver Pedidos</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($currentPage =='finalizados'){echo 'active';}?>"><a href="finalizados.php"><i class="fa fa-circle-o"></i> Pedidos Finalizados</a></li>
            <li class="<?php if($currentPage =='pendentes'){echo 'active';}?>"><a href="pendentes.php"><i class="fa fa-circle-o"></i> Pedidos Pendentes</a></li>
          </ul>
        </li>
        <li class="treeview <?php if($currentPage =='pendentes' || $currentPage =='finalizados'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-money"></i> <span>Ver Clientes</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($currentPage =='listarcliente'){echo 'active';}?>"><a href="listarcliente.php"><i class="fa fa-circle-o"></i> Clientes</a></li>
          </ul>
        </li>      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>