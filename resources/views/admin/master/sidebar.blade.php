  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('/uploads/avatar/'.Auth::user()->foto)}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-key text-success"></i> {{ Auth::user()->jabatan }}</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="{{route('home')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        @if(Auth::user()->jabatan == "Pemilik")
        <li>
          <a href="{{ route('users.index') }}"><i class="fa fa-user"></i> <span> Pengguna</span></a>
        </li>
        <li>
          <a href="{{ route('paket.index') }}"><i class="fa fa-book"></i> <span> Paket</span></a>
        </li>
        <li>
          <a href="{{ route('users.index') }}"><i class="fa fa-cart-arrow-down"></i> <span> Barang</span></a>
        </li>
        <li>
          <a href="{{ route('users.index') }}"><i class="fa fa-check-square-o"></i> <span> Reservasi</span></a>
        </li>
        <li>
          <a href="{{ route('users.index') }}"><i class="fa fa-money"></i> <span> Transaksi</span></a>
        </li>
        <li>
          <a href="{{ route('layanan.index') }}"><i class="fa fa-pie-chart"></i> <span> Layanan</span></a>
        </li>
        <li>
          <a href="{{ route('users.index') }}"><i class="fa fa-pie-chart"></i> <span> Laporan</span></a>
        </li>
        @elseif(Auth::user()->jabatan == "Kasir")
        <li>
          <a href="{{ route('users.index') }}"><i class="fa fa-user"></i> <span> Reservasi</span></a>
        </li>
        @endif

        
    </section>
    <!-- /.sidebar -->
  </aside>
