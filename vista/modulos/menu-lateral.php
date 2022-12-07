<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="inicio" class="brand-link">
    <img src="vista/img/elecciones/elecciones.jfif" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Lista de Punteros</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="vista/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Eduardo Pattender</a>
      </div>
    </div>



    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <?php

        if ($_SESSION["perfil"] == "Administrador") {
          echo '
                          <li class="nav-item">
                          <a href="inicio" class="nav-link">
                            <i class="nav-icon fa fa-home"></i>
                            <p>
                              Inicio
                            </p>
                          </a>
                        </li>
                      ';
        }

        ?>

        <?php

        if (isset($_SESSION["perfil"]) && ($_SESSION["perfil"] == "admin_pc" || $_SESSION["perfil"] == "Administrador")) {
          echo '
                  <li class="nav-item">
                  <a href="puntero" class="nav-link">
                    <i class="nav-icon fa fa-users"></i>
                    <p>
                      Votantes
                    </p>
                  </a>
                </li>
              ';
        }

        ?>

        <?php

        if (isset($_SESSION["perfil"]) && ($_SESSION["perfil"] == "admin_pc" || $_SESSION["perfil"] == "Administrador")) {
          echo '
                <li class="nav-item">
                <a href="lider" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    Puntero
                  </p>
                </a>
              </li>
              ';
        }

        ?>

        <?php

        if (isset($_SESSION["perfil"]) && ($_SESSION["perfil"] == "admin_pc" || $_SESSION["perfil"] == "Administrador")) {
          echo '
                <li class="nav-item">
                <a href="filero" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    Fileros
                  </p>
                </a>
              </li>
              </li>
            ';
        }

        ?>


        <?php

        if (isset($_SESSION["perfil"]) && ($_SESSION["perfil"] == "veedor" || $_SESSION["perfil"] == "Administrador")) {
          echo '
                  <li class="nav-item">
                    <a href="veedor" class="nav-link">
                      <i class="nav-icon fa fa-user"></i>
                      <p>
                        Veedor
                      </p>
                    </a>
                  </li>
              ';
        }

        ?>

        <?php

        if ($_SESSION["perfil"] == "Administrador") {
          echo '
            <li class="nav-item">
            <a href="veedor-reporte" class="nav-link">
            <i class="nav-icon fa fa-flag"></i>
              <p>
                Reportes Veedor
              </p>
            </a>
          </li>
            ';
        }

        ?>

        <?php

        if ($_SESSION["perfil"] == "Administrador") {
          echo '
            <li class="nav-item">
            <a href="reportes" class="nav-link">
             <i class="nav-icon fa fa-flag"></i>
              <p>
                Reportes
              </p>
            </a>
          </li>
            ';
        }

        ?>




      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>