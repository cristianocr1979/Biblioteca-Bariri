<!DOCTYPE html>
<html lang="en">

<head>
    

    <title>Painel Administrativo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link href="<?php echo base_url; ?>Assets/css/main.css" rel="stylesheet" />
    <link href="<?php echo base_url; ?>Assets/css/datatables.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="<?php echo base_url; ?>Assets/css/select2.min.css" rel="stylesheet" />
	<link href="<?php echo base_url; ?>Assets/css/estilos.css" rel="stylesheet" />
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>Assets/css/font-awesome.min.css">
</head>

<style>
    .app-header {
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  width: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  background-color: #00008B;
  z-index: 1030;
  padding-right: 15px;
}

.app-sidebar__toggle:focus, .app-sidebar__toggle:hover {
  color: #fff;
  background-color: #00008B;
  text-decoration: none;
}

a {
  color: #001969;
  text-decoration: none;
  background-color: transparent;
}

a:hover {
  color: #001969;
  text-decoration: underline;
}

.sidebar-mini.sidenav-toggled .treeview:hover .app-menu__item {
    overflow: visible;
    background: #0d1214;
    border-left-color: #00008B;
    color: #fff;
  }



  .sidebar-mini.sidenav-toggled .app-menu__label {
    display: block;
    position: absolute;
    top: 0;
    left: 50px;
    min-width: 180px;
    padding: 12px 5px 12px 20px;
    margin-left: -3px;
    line-height: 1;
    opacity: 0;
    background: #00008B;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
  }



@media (min-width: 768px) {
  .app-header__logo {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    display: block;
    width: 230px;
    background-color: #030340;
  }
}

.btn-primary {
  color: #FFF;
  background-color: #120a8f;
  border-color: #120a8f;
}

.btn-primary:hover {
  color: #FFF;
  background-color: #000080;
  border-color: #000080;
}
.page-item.active .page-link {
  z-index: 1;
  color: #FFF;
  background-color: #120a8f;
  border-color: #120a8f;
}

.form-control:focus {
    border-color: #00008B; /* Cor azul mais clara quando o input está em foco */
    outline: none; /* Remove a borda padrão do foco */
}


.app-menu__item.active, .app-menu__item:hover, .app-menu__item:focus {
  background: #0d1214;
  border-left-color: #00008B;
  text-decoration: none;
  color: #fff;
}

.bg-primary {
  background-color:  #120a8f!important;
}



</style>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="<?php echo base_url; ?>Configuracion/admin">Biblioteca EMEF </a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
           

        
            <!-- <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="app-notification dropdown-menu dropdown-menu-right">
                    <li class="app-notification__title">Livros não devolvidos</li>
                    <div class="app-notification__content">
                        <li id="nombre_estudiante">
                            
                        </li>
                    </div>
                    <li class="app-notification__footer"><a href="<?php echo base_url; ?>Configuracion/libros" target="_blank">Gerar relatórios</a></li>
                </ul>
            </li>
            -->



            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="#" id="modalPass"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url; ?>Usuarios/salir"><i class="fa fa-sign-out fa-lg"></i> Sair</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?php echo base_url; ?>Assets/img/logo.png" alt="User Image" width="50">
            <div>
                <p class="app-sidebar__user-name"><?php echo $_SESSION['nombre'] ?></p>
                <p class="app-sidebar__user-designation"><?php echo $_SESSION['usuario']; ?></p>
            </div>
        </div>
        <ul class="app-menu">
            <li><a class="app-menu__item" href="<?php echo base_url; ?>Prestamos"><i class="app-menu__icon fa fa-hourglass-start"></i><span class="app-menu__label">Empréstimos</span></a></li>
            <li><a class="app-menu__item" href="<?php echo base_url; ?>Estudiantes"><i class="app-menu__icon fa fa-graduation-cap"></i><span class="app-menu__label">Estudantes</span></a></li>
            <li><a class="app-menu__item" href="<?php echo base_url; ?>Materia"><i class="app-menu__icon fa fa-list-alt"></i><span class="app-menu__label">Matérias</span></a></li>
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">Livros</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="<?php echo base_url; ?>Autor"><i class="icon fa fa-address-book-o"></i> Autores</a></li>
                    <li><a class="treeview-item" href="<?php echo base_url; ?>Editorial"><i class="icon fa fa-tags"></i> Editoras</a></li>
                    <li><a class="treeview-item" href="<?php echo base_url; ?>Libros"><i class="icon fa fa-book"></i> Livros</a></li>
                </ul>
            </li>
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-wrench"></i><span class="app-menu__label">Administração</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="<?php echo base_url; ?>Usuarios"><i class="icon fa fa-user-o"></i> Usuários</a></li>
                    <li><a class="treeview-item" href="<?php echo base_url; ?>Configuracion"><i class="icon fa fa-cogs"></i> Configurações</a></li>
                </ul>
            </li>
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Relatórios</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" target="_blank" href="<?php echo base_url; ?>Prestamos/pdf"><i class="icon fa fa-file-pdf-o"></i> Livros emprestados</a></li>
                </ul>
            </li>
        </ul>
    </aside>
    <main class="app-content">