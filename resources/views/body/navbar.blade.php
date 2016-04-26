<header class="main-header">
  <!-- Logo -->
  <a href="{{asset('/')}}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="{{asset('dist/img/logo-103x50.png')}}" class="img-rounded" alt="Logo"></img></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="{{asset('dist/img/logo-103x50.png')}}" class="img-rounded" alt="Logo"></img></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>

    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{asset('dist/img/avatar_default.png')}}" class="user-image" alt="User Image">
            
            <?php //<span class="hidden-xs">{{Auth::user()->username}}</span> ?>
            
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">


            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="col-xs-12 text-center">
                 @if(Entrust::hasRole('nacional'))
                   <a href="{{asset('admin/anexos/ver')}}">Anexos creados a nivel nacional: {{$countAnexosNN}}</a>
                   <a href="{{asset('user/anexos/ver')}}">Tus anexos creados: {{$countAnexos}}</a>
                 @endif
                 @if(Entrust::hasRole('regional'))
                   <a href="{{asset('admin/anexos/ver')}}">Anexos creados a nivel regional ({{$region}}): {{$countAnexos}}</a>
                 @endif
                 @if(Entrust::hasRole('admin'))
                   <a href="{{asset('admin/anexos/ver')}}">Anexos creados: {{$countAnexos}}</a>
                 @endif
                 @if(Entrust::hasRole('user'))
                   <a href="{{asset('user/anexos/ver')}}">Tus Anexos creados: {{$countAnexos}}</a>
                 @endif
              </div>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="{{asset('auth/logout')}}" class="btn btn-default btn-flat">Salir</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>