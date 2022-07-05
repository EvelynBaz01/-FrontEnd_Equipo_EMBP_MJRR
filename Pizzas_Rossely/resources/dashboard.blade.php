<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Pizzas Rossely</title>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Project-3</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/maindash.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <header class="app-header">
        <a class="app-header__logo" href="dashboard.html">Pizzas Rossely</a>
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Buscar">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="login.html"><i class="fa fa-sign-out fa-lg"></i>Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user">
            <img class="app-sidebar__user-avatar" src="images/Pizza.png">
            <div>
                <p class="app-sidebar__user-name">Evelyn Baz Pérez</p>
                <p class="app-sidebar__user-designation">Administrador</p>
            </div>
        </div>
        <ul class="app-menu">
            <li><a class="app-menu__item active" href="dashboard.html"><i class="app-menu__icon fa fa-id-card-o"></i><span class="app-menu__label">Inicio</span></a></li>
            <li class="treeview"><a class="app-menu__item" href="" data-toggle="treeview"><i class="app-menu__icon icon fa fa-users"></i><span class="app-menu__label">Usuarios</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a class="treeview-item" href="users.html"><i class="icon fa fa-circle-o"></i> Lista de usuarios</a></li>
                <li><a class="treeview-item" href="Userregister.html"><i class="icon fa fa-circle-o"></i> Registrar usuarios</a></li>
              </ul>
            </li>
            <li class="treeview"><a class="app-menu__item" href="" data-toggle="treeview"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Productos</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a class="treeview-item" href="product.html"><i class="icon fa fa-circle-o"></i> Lista de productos</a></li>
                <li><a class="treeview-item" href="registerProd.html"><i class="icon fa fa-circle-o"></i> Registrar productos</a></li>
              </ul>
            </li>
        </ul>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div >
          <h1 >BIENVENIDO</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <img class="image" src="images/fondod.jpg">
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <img class="image" src="images/fondod2.jpg">
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="jsdash/jquery-3.2.1.min.js"></script>
    <script src="jsdash/popper.min.js"></script>
    <script src="jsdash/bootstrap.min.js"></script>
    <script src="jsdash/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="jsdash/plugins/pace.min.js"></script>
    
  </body>
</html>