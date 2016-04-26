<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('dist/img/perfil')}}/{{isset(Auth::user()->image_path) ? Auth::user()->image_path : 'avatar_default.png'}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">

        <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
      </div>
    </div>
    <ul class="sidebar-menu">



<?php //AQUI VOY A PONER LO DE PROBAR LA BARRA DE LA IZQUIERDA?>

      <li class="header">Opciones</li>
      <li class="treeview @yield('active-tree-2')">
        <a href="#">
          <i class="glyphicon glyphicon-user"></i> <span>Usuario</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li @yield('active-ver-2')><a @section('href_login') href="{{asset('login')}}" @show ><i class="fa fa-eye"></i> Login  </a></li>
          <li @yield('active-add-2')><a @section('href-registro') href="{{asset('registro')}}" @show><i class="fa fa-edit"></i> Registrarse</a></li>xx
        </ul>
      </li>

<?php //AQUI ACABA LA PRUEBA DE LA BARRA ZQUIERDA?>

      @if(Entrust::hasRole('nacional') || Entrust::hasRole('user'))
      <li class="header">Anexos</li>
      <li class="treeview @yield('active-tree-2')">
        <a href="#">
          <i class="fa fa-files-o"></i> <span>Anexo Tecnico No 2</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li @yield('active-ver-2')><a @section('href-ver-2') href="{{asset('anexos2/ver')}}" @show ><i class="fa fa-eye"></i> Ver anexos</a></li>
          <li @yield('active-add-2')><a @section('href-add-2') href="{{asset('anexos2/agregar')}}" @show><i class="fa fa-edit"></i> Agregar anexo</a></li>
        </ul>
      </li>
<li class="treeview @yield('active-tree-3')">
        <a href="#">
          <i class="fa fa-files-o"></i> <span>Anexo Tecnico No 3</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li @yield('active-ver-3')><a @section('href-ver-3') href="{{asset('anexos3/ver')}}" @show ><i class="fa fa-eye"></i> Ver anexos</a></li>
          <li @yield('active-add-3')><a @section('href-add-3') href="{{asset('anexos3/agregar')}}" @show ><i class="fa fa-edit"></i> Agregar anexo</a></li>
        </ul>
      </li>
<li class="treeview @yield('active-tree-9')">
        <a href="#">
          <i class="fa fa-files-o"></i> <span>Anexo Tecnico No 9</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li @yield('active-ver-9')><a @section('href-ver-9') href="{{asset('anexos9/ver')}}" @show ><i class="fa fa-eye"></i> Ver anexos</a></li>
          <li @yield('active-add-9')><a @section('href-add-9') href="{{asset('anexos9/agregar')}}" @show ><i class="fa fa-edit"></i> Agregar anexo</a></li>
        </ul>
      </li>
      @endif
      @if(Entrust::hasRole('nacional'))
      <li class="header">Administrador</li>
      <li class="treeview @yield('active-tree-sed')">
        <a href="#">
          <i class="fa fa-building"></i> <span>Sedes</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li @yield('active-ver-sed')><a @section('href-ver-sed') href="{{asset('admin/sedes/ver')}}" @show ><i class="fa fa-eye"></i> Ver Sedes</a></li>
          <li @yield('active-ver-use')><a @section('href-ver-use') href="{{asset('admin/sedes/ver/usuarios')}}" @show ><i class="fa fa-user-md"></i> Ver Usuarios de Sedes</a></li>
          <li @yield('active-ver-uad')><a @section('href-ver-uad') href="{{asset('admin/sedes/agregar/usuarios')}}" @show ><i class="fa fa-plus"></i> Agregar Usuarios de Sedes</a></li>
        </ul>
      </li>
      <li class="treeview @yield('active-tree-pr')">
        <a href="#">
          <i class="fa fa-hospital-o"></i> <span>Prestadores</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li @yield('active-ver-pr')><a @section('href-ver-pr') href="{{asset('admin/prestadores/ver')}}" @show ><i class="fa fa-eye"></i> Ver prestadores</a></li>
          <li @yield('active-add-pr')><a @section('href-add-pr') href="{{asset('admin/prestadores/agregar')}}" @show ><i class="fa fa-building-o"></i> Crear Prestadores</a></li>
        </ul>
      </li>
      <li class="treeview @yield('active-tree-us')">
        <a href="#">
          <i class="fa fa-users"></i> <span>Usuarios</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li @yield('active-ver-us')><a @section('href-ver-us') href="{{asset('admin/usuarios/ver')}}" @show ><i class="fa fa-user"></i> Ver Usuarios</a></li>
          <li @yield('active-add-us')><a @section('href-add-us') href="{{asset('admin/usuarios/agregar')}}" @show ><i class="fa fa-user-plus"></i> Crear Usuarios</a></li>
        </ul>
      </li>
      <li class="treeview @yield('active-tree-an')">
        <a href="#">
          <i class="fa fa-files-o"></i> <span>Anexos a nivel nacional</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li @yield('active-ver-an')><a @section('href-ver-an') href="{{asset('anexos/nacional/ver')}}" @show ><i class="fa fa-eye"></i> Ver todos los anexos</a></li>
          <li @yield('active-ver-an2')><a @section('href-ver-an2') href="{{asset('anexos2/nacional/ver')}}" @show ><i class="fa fa-file-o"></i> Anexo 2</a></li>
          <li @yield('active-ver-an3')><a @section('href-ver-an3') href="{{asset('anexos3/nacional/ver')}}" @show ><i class="fa fa-file-o"></i> Anexo 3</a></li>
          <li @yield('active-ver-an9')><a @section('href-ver-an9') href="{{asset('anexos9/nacional/ver')}}" @show ><i class="fa fa-file-o"></i> Anexo 9</a></li>
        </ul>
      </li>
      @endif
      @if(Entrust::hasRole('regional'))
      <li class="header">Administrador</li>
      <li class="treeview @yield('active-tree-ar')">
        <a href="#">
          <i class="fa fa-files-o"></i> <span>Anexos a nivel Regional</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li @yield('active-ver-a2')><a @section('href-add-a2') href="{{asset('anexos2/regional/ver')}}" @show ><i class="fa fa-circle-o"></i> Anexo 2</a></li>
          <li @yield('active-add-a3')><a @section('href-add-a3') href="{{asset('anexos3/regional/ver')}}" @show ><i class="fa fa-circle-o"></i> Anexo 3</a></li>
          <li @yield('active-add-a9')><a @section('href-add-a9') href="{{asset('anexos9/regional/ver')}}" @show ><i class="fa fa-circle-o"></i> Anexo 9</a></li>
        </ul>
      </li>
      @endif
       @if(Entrust::hasRole('admin'))
      <li class="header">Administrador</li>
      <li class="treeview @yield('active-tree-pr')">
        <a href="#">
          <i class="fa fa-files-o"></i> <span>Anexos a nivel de IPS</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li @yield('active-ver-a2')><a @section('href-add-a2') href="{{asset('anexos2/administracion/ver')}}" @show ><i class="fa fa-circle-o"></i> Anexo 2</a></li>
          <li @yield('active-add-a3')><a @section('href-add-a3') href="{{asset('anexos3/administracion/ver')}}" @show ><i class="fa fa-circle-o"></i> Anexo 3</a></li>
          <li @yield('active-add-a9')><a @section('href-add-a9') href="{{asset('anexos9/administracion/ver')}}" @show ><i class="fa fa-circle-o"></i> Anexo 9</a></li>
        </ul>
      </li>
      @endif
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>