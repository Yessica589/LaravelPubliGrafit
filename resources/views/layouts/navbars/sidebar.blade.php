<div class="sidebar" data-color="green" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="" class="simple-text logo-normal">
    <img src="{{ asset('/img/circulo.jpg') }}" alt="image"  width="50px" high="200px"class="avatar">
      {{ __('PubliGrafit') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.index')}}">
          <i class="material-icons">person</i>
            <p>Usuarios</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravel" aria-expanded="true">
          <i class="material-icons">local_mall</i>
          <p>{{ __('Compras') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravel">
          <ul class="nav">
            
            
            <li class="nav-item{{ $activePage == 'categoriaproveedor' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('categoriaproveedor.index')}}">
              <i class="material-icons">category</i>
                 <p>Categoría Proveedor </p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'proveedor' ? ' active' : '' }}">
               <a class="nav-link" href="{{ route('proveedor.index')}}">
               <i class="material-icons">assignment_ind</i>
                <p>Proveedores</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'controlinsumo' ? ' active' : '' }}">
               <a class="nav-link" href="{{ route('controlinsumo.index')}}">
               <i class="material-icons">keyboard_alt</i>
                <p>Control de insumos</p>
                </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="material-icons">precision_manufacturing</i>
          <p>{{ __('Producción') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'productoterminado' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('productoterminado.index')}}">
              <i class="material-icons">inventory_2</i>
                 <p>Producto Terminado </p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'fichainsumo' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('fichainsumo.index')}}">
              <i class="material-icons">description</i>
                 <p>Ficha Técnica </p>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="laravel2" aria-expanded="true">
          <i class="material-icons">point_of_sale</i>
          <p>{{ __('Ventas') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravel2">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'ventaproducto' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('ventaproducto.index')}}">
              <i class="material-icons">receipt</i>
                <p>Gestión de Ventas </p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'cliente' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('cliente.index')}}">
              <i class="material-icons">group_add</i>
                <p>Clientes </p>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>
