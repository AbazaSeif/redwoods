<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php if (filexist($user['img']) && $user['img']): ?>
            <img src="<?=base_url($user['img'])?>" class="img-circle" alt="User Image">
          <?php else: ?>
            <img src="<?=base_url('assets/img/no_image.gif')?>" class="img-circle" alt="User Image">                
          <?php endif ?>
        </div>
        <div class="pull-left info">
          <p><?=$user['name']?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>           
        
      <?php if ($user['user_level'] >= 8): ?>
        <li class="header">LOANS AND BORROWER</li>      
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Borrower's Accounts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('borrowers')?>"><i class="fa fa-circle-o"></i> Account List</a></li>
            <li><a href="<?=base_url('borrowers/create')?>"><i class="fa fa-circle-o"></i> Register New Account</a></li>
          </ul>
        </li>   
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Loans</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('borrowers')?>"><i class="fa fa-circle-o"></i> Account List</a></li>
            <li><a href="<?=base_url('borrowers/create')?>"><i class="fa fa-circle-o"></i> Register New Account</a></li>
          </ul>
        </li>  
        <?php endif ?>      

        <?php if ($user['user_level'] >= 10): ?>
        <li class="header">ADMIN OPTIONS</li>         
        <li><a href="<?=base_url('users')?>"><i class="fa fa-users"></i> <span>System Users</span></a></li>
        <?php endif ?>      



      </ul>
    </section>
    <!-- /.sidebar -->