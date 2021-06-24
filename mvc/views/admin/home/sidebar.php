<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background:linear-gradient(45deg, #be2edd,#833471); color: #000">
    <!-- Brand Logo -->
    <a href="<?php echo URL_ADMIN;?>" class="brand-link">
      <img src="<?php echo URL_ADMIN;?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminAdela</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">
        
          <a href="#" class="d-block">mienmien192</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      


       <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
               <a href="<?php echo URL.'user/index'; ?>" class="nav-link">
                  
                  <p>All User</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="<?php echo URL.'user/store'; ?>" class="nav-link">
                 
                  <p>Add User</p>
                </a>
              </li>
            </ul>
          </li>
         
        </ul>
      </nav>


      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
            <i class="fab fa-product-hunt"></i>
              <p>
                Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
               <a href="<?php echo URL.'product/index'; ?>" class="nav-link">
                  
                  <p>Tất cả sản phẩm</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?php echo URL.'product/store'; ?>" class="nav-link">
                  
                  <p>Thêm Product</p>
                </a>
              </li>
            </ul>
          </li>
         
        </ul>
      </nav>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>