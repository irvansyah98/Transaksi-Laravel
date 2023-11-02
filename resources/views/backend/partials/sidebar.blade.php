<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Admin</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">Admin</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li><a class="nav-link" href="{{ url('/backend') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
      @if(Auth::user()->role == 'admin')
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>User</span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ url('backend/admin') }}">Admin</a></li>
        </ul>
      </li> 
      @endif  
      <li><a class="nav-link" href="{{ url('backend/item') }}"><i class="fas fa-file"></i> <span>Transaksi</span></a></li>  
    </ul>      
  </aside>