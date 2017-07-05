
   <div class="sidebar">
      <div class="user-heading">
        <div class="user-name">
          <img src="http://placehold.it/50x50" alt="Avatar" class="img-circle"/>
          <h4>Sunil Subedi</h4>
        </div>
      </div>

      <nav class="navigation">
        <ul class="side-menu">
          <li class="menu-item active"><a href="{{route('dashboard')}}"><i class="fa fa-tachometer fa-fw fa-lg" aria-hidden="true"></i> Dashboard</a></li>
          <li class="menu-item"><a href="{{route('dashboard')}}"><i class="fa fa-home fa-fw fa-lg" aria-hidden="true"></i> Admin</a></li>
          <li class="menu-item"><a href="{{route('category.index')}}"><i class="fa fa-wrench fa-fw fa-lg" aria-hidden="true"></i> Category</a></li>
          <li class="menu-item"><a href="{{route('product.index')}}"><i class="fa fa-money fa-fw fa-lg" aria-hidden="true"></i> Product</a></li>
          <li class="menu-item"><a href="#"><i class="fa fa-group fa-fw fa-lg" aria-hidden="true"></i> Users</a></li>
        </ul>
        <div class="logout">
          <a href="{{url ('admin/logout') }}" class="logout-button"><i class="fa fa-fw fa-lg fa-power-off"></i> Logout</a>
        </div>
      </nav>
    </div>