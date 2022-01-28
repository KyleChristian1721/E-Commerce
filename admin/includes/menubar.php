<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $admin['firstname'].' '.$admin['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li><a href="home.php"><i class="fas fa-columns"></i>&nbsp;&nbsp;<span>Dashboard</span></a></li>
      <li><a href="sales.php"><i class="fas fa-chart-line"></i>&nbsp;&nbsp;<span>Sales</span></a></li>
      <li><a href="users.php"><i class="fas fa-users"></i>&nbsp;&nbsp;<span>Users</span></a></li>
      <li class="treeview">
        <a href="#">
        <i class="fas fa-shopping-basket"></i>&nbsp;&nbsp;
          <span>Products</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="products.php"></i> Product List</a></li>
          <li><a href="category.php"></i> Category</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>