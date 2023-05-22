<?php

$servidor = Ruta::ctrRutaServidor();

?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

	<!-- Brand Logo -->
	<a href="inicio" class="brand-link">

	      <img src="<?php echo $servidor; ?>vista/dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
	      <span class="brand-text font-weight-light">Manager System</span>

	</a>

	<!-- Sidebar -->
    <div class="sidebar">

    	<!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

	        <div class="image">
	          <img src="<?php echo $servidor; ?>vista/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
	        </div>

	        <div class="info">
	          <a href="editar-perfil" class="d-block"><?php echo $_SESSION["nombreTiendita"]." ".$_SESSION["apellidosTiendita"]; ?></a>
	        </div>

        </div>

        <!-- Sidebar Menu -->
		<nav class="mt-2">

			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

				<?php

				$item = "id";
				$valor = $_SESSION["rolTiendita"];

				$rol = ControladorPermisos::ctrMostrarRoles($item, $valor);

				$idCategorias    = explode(",", $rol["categorias"]);
				$idSubcategorias = explode(",", $rol["subcateegorias"]);

				for ($i=0; $i < sizeof($idCategorias); $i++) {

					$itemcat = "idcat";
					$valorcat   = $idCategorias[$i];

					$categorias = ControladorPermisos::ctrMostrarCategorias($itemcat, $valorcat); ?>

					<li class="nav-item">

						<a href="#" class="nav-link <?php echo $categorias["classcolor"]; ?> ">

              				<i class=" <?php echo $categorias["icono"]; ?>"></i>

              				<p>
                				<?php echo $categorias["nombre"]; ?>

                				<i class="fas fa-angle-left right"></i>

              				</p>

            			</a>

            			<ul class="nav nav-treeview">

            				<?php

            				$itemsubcat  = "idcategoria";
            				$valorsubcat =  $idCategorias[$i];

            				$subcategorias = ControladorPermisos::ctrMostrarSubCategorias($itemsubcat, $valorsubcat);



            				foreach ($subcategorias as $key => $value) {

            					if (in_array($value["idsubcategoria"], $idSubcategorias)) { ?>

            						<li class="nav-item">

                					<a href="<?php echo $value["url"]; ?>" id="clickMenuagregar-producto" class="nav-link">

	                  					<i class="<?php echo $value["icono"]; ?>"></i>
	                  					<p><?php echo $value["nombre"]; ?></p>

                					</a>

              					</li>

              					<?php
            					}

            				}

            				 ?>

            			</ul>

					</li>

				<?php

				}

				?>

			</ul>

		<!-- Sidebar Menu -->
		</nav>

	<!-- /.sidebar-menu -->
    </div>

</aside>