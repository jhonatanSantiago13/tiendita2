<!--=====================================
NAV SUPERIOR
======================================-->

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">

  <!-- Left navbar links -->
  <ul class="navbar-nav">

    	<li class="nav-item">

      	<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

    	</li>

    	<li class="nav-item d-none d-sm-inline-block">

      	<a href="inicio" class="nav-link">Home</a>

    	</li>

  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">

      <li class="nav-item">

          <a class="nav-link" data-toggle="dropdown" href="#">

            <i class="nav-icon fa fa-bell"></i>
            <span class="badge badge-danger navbar-badge" id="noalarms">0</span>

          </a>

      </li>

      <li class="nav-item">

          <a class="nav-link"  href="carrito">
          <!-- <a class="nav-link" data-toggle="dropdown" href="carrito"> -->

            <i class="nav-icon fa fa-shopping-bag"></i>
            <span class="badge badge-danger navbar-badge" id="bolsaCompras"></span>

          </a>

      </li>

	    <li class="nav-item">

        <a class="nav-link" data-widget="fullscreen" href="#" role="button">

           <i class="fas fa-expand-arrows-alt"></i>

        </a>

      </li>

    <li class="nav-item dropdown">

      <a class="nav-link" data-toggle="dropdown" href="#">

          <i class="fas fa-th-large"></i>

      </a>

      <!--=====================================
      MENU PERFIL
      ======================================-->

      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          <h5 class="dropdown-item">User Name</h5>

          <div class="dropdown-divider"></div>

          <div class="dropdown-item mb-4">
            <!--
              <input type="checkbox" value="1" checked="checked" class="mr-1" id="tema">

              <span>Modo Oscuro</span>

          </div> -->

          <div class="dropdown-divider"></div>

          <a href="editar-perfil" class="dropdown-item">

             <i class="fas fa-user mr-2"></i> Editar Perfil
             <!-- <span class="float-right text-muted text-sm">3 mins</span> -->

          </a>

          <div class="dropdown-divider"></div>

          <a href="logout" class="dropdown-item">

              <i class="fas fa-user-circle mr-2"></i> Cerrar Sesión
              <!-- <span class="float-right text-muted text-sm">3 mins</span> -->

          </a>

      </div>

    </li>

  </ul>

</nav>
