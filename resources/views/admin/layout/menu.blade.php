
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="ad_asset/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p>{{Auth::user()->name}}</p>
          <p href="#"><i class="fa fa-circle text-success"></i> Online</p>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview menu">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Quản trị</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin/user/listad"><i class="fa fa-circle-o"></i> Danh sách Quản trị</a></li>
            <li><a href="admin/user/add"><i class="fa fa-circle-o"></i> THÊM Quản trị</a></li>
          </ul>
        </li>
        <li class="treeview menu">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>THÍ SINH</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin/user/list"><i class="fa fa-circle-o"></i> DANH SÁCH THÍ SINH </a></li>
            <li><a href="admin/user/addmembers"><i class="fa fa-circle-o"></i> THÊM THÍ SINH</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>NEWS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="admin/news/list"><i class="fa fa-circle-o"></i> LIST NEWS </a></li>
            <li><a href="admin/news/add"><i class="fa fa-circle-o"></i> ADD NEW NEWS</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>