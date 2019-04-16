<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{ route('dashboard') }}">
            <i class="fa fa-th"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        @can('posts',Auth::user())
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Posts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('post.index') }}"><i class="fa fa-circle-o"></i> List Posts </a></li>
            <li><a href="{{ route('post.create') }}"><i class="fa fa-circle-o"></i> Add Post</a></li>
          </ul>
        </li>
        @endcan
        @can('tags',Auth::user())
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tags</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('tag.index') }}"><i class="fa fa-circle-o"></i>List tag</a></li>
            <li><a href="{{ route('tag.create') }}"><i class="fa fa-circle-o"></i>Add tag</a></li>
          </ul>
        </li>
        @endcan
        @can('category',Auth::user())
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('category.index') }}"><i class="fa fa-circle-o"></i> List Category</a></li>
            <li><a href="{{ route('category.create') }}"><i class="fa fa-circle-o"></i> Add Category</a></li>
          </ul>
        </li>
        @endcan
        @can('permissions',Auth::user())
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users text-aqua"></i> <span>Permissions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('permission.index') }}"><i class="fa fa-circle-o"></i> List Permission</a></li>
            <li><a href="{{ route('permission.create') }}"><i class="fa fa-circle-o"></i> Add Permission</a></li>
          </ul>
        </li>
        @endcan
        @can('roles',Auth::user())
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-plus"></i> <span>Roles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('role.index') }}"><i class="fa fa-circle-o"></i>List Roles</a></li>
            <li><a href="{{ route('role.create') }}"><i class="fa fa-circle-o"></i>Create Roles</a></li>
          </ul>
        </li>
        @endcan
        @can('users',Auth::user())
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i> List user</a></li>
            <li><a href="{{ route('user.create') }}"><i class="fa fa-circle-o"></i> Add user</a></li>
          </ul>
        </li>
        @endcan

        <li class="header"></li>
        
        <li>
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
          <i class="fa fa-power-off text-red"></i>
           {{ __('Logout') }}
          </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        </li>
        <li><a href="#"><i class="fa fa fa-gears text-yellow"></i> <span>System</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
