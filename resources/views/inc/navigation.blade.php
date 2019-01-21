  <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 619px;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <img src="{{asset('img\brand.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
    <img src="{{asset('img\user.png')}}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
    <a href="#" class="d-block">{{auth()->user()->username}}</a>
    </div>
    </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="nav-icon fa fa-th"></i>
                  <p>
                    Dashboard
                    <span class="right badge badge-danger">New</span>
                  </p>
                </a>
              </li>     
              <li class="nav-item has-treeview ">
                <a href="#" class="nav-link ">
                  <i class="nav-icon fa fa-dashboard"></i>
                  <p>
                    Management
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link ">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>User</p>
                    </a>
                  </li>
                </ul>
              </li>
              
              <li class="nav-item has-treeview ">
                <a href="#" class="nav-link ">
                  
                    <i class="nav-icon fa fa-edit"></i>
                  <p>
                    Permintaan
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
             
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                          <i class="fas fa-circle-notch nav-icon" style="font-size: 15px;"></i>
                          <p>Tambah Permintaan</p>
                        </a>
                    </li>  
               
                
                  <li class="nav-item">
                  <a href="" class="nav-link ">
                      <i class="fas fa-circle-notch nav-icon" style="font-size: 15px;"></i>
                      <p>Daftar</p>
                    </a>
                  </li>

                  <li class="nav-item">
                      <a href="" class="nav-link ">
                          <i class="fas fa-circle-notch nav-icon" style="font-size: 15px;"></i>
                          <p>Disposisi</p>
                        </a>
                      </li>
  
                </ul>
              </li>
          
       
             
              <li class="nav-item">
              <a href="/logout" class="nav-link">
                    <i class="nav-icon fa fa-th"></i>
                    <p>
                      Log out
                      <span class="right badge badge-danger">New</span>
                    </p>
                  </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
</div>
</aside>