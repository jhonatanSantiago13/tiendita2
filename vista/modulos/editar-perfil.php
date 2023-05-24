<?php

$servidor = Ruta::ctrRutaServidor();

?>

<div class="content-wrapper">

	<!-- Content Header (Page header) -->
    <section class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

          	<br>

            <h1>Perfil del Usuario</h1>

          </div>

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="inicio">Home</a></li>
              <li class="breadcrumb-item active">Perfil</li>

            </ol>

          </div>

        </div>

      </div><!-- /.container-fluid -->

    </section>

    <section class="content">

      <div class="container-fluid">

	        <div class="row">

	        	<div class="col-md-3">

		            <!-- Profile Image -->
		            <div class="card card-info card-outline">
		              <div class="card-body box-profile">
		                <div class="text-center">
		                  <img class="profile-user-img img-fluid img-circle"
		                       src="<?php echo $servidor; ?>vista/dist/img/user4-128x128.jpg"
		                       alt="User profile picture">
		                </div>

		                <h3 class="profile-username text-center">Taylor Swift</h3>

		                <p class="text-muted text-center">manager</p>

		               <!--  <ul class="list-group list-group-unbordered mb-3">
		                  <li class="list-group-item">
		                    <b>Followers</b> <a class="float-right">1,322</a>
		                  </li>
		                  <li class="list-group-item">
		                    <b>Following</b> <a class="float-right">543</a>
		                  </li>
		                  <li class="list-group-item">
		                    <b>Friends</b> <a class="float-right">13,287</a>
		                  </li>
		                </ul>

		                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
		              </div>
		              <!-- /.card-body -->
		            </div>
		            <!-- /.card -->

		            <!-- About Me Box -->
		            <div class="card card-info">
		              <div class="card-header">
		                <h3 class="card-title">Sobre Mi</h3>
		              </div>
		              <!-- /.card-header -->
		              <div class="card-body">
		                <strong><i class="fas fa-user mr-1"></i> Personal</strong>

		                <p class="text-muted">
		                  Taylor Swift Finlay <br>
		                  <b>Username: </b> taylorsw13 <br>
		                  <b>Perfil: </b> Manger <br>
		                  13 de diciembre de 1989 <br>

		                </p>

		                <hr>

		                <strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicación</strong>

		                <p class="text-muted">Malibu, California</p>

		                <hr>

		                <strong><i class="fa fa-store mr-1"></i> Permisos</strong>

		                <p class="text-muted">
		                   <ol>
		                   	<li>Usuarios</li>
		                   	<li>Productos</li>
		                   	<li>Ventas</li>
		                   	<li>Roles</li>

		                   </ol>
		                </p>

		                <hr>

		                <strong><i class="fa fa-calendar mr-1"></i> Fecha de ingreso</strong>

		                <p class="text-muted">13 de Diciembre del 2021.</p>
		              </div>
		              <!-- /.card-body -->
		            </div>
		            <!-- /.card -->
          		</div>
          		<!-- /.col -->

          		<div class="col-md-9">

          			 <div class="card">

          			 	<div class="card-header p-2">

				            <ul class="nav nav-pills">

				              <li class="nav-item"><a class="nav-link active" href="#datosUsuario" data-toggle="tab">Editar datos del usuario</a></li>
				              <li class="nav-item"><a class="nav-link" href="#direccion" data-toggle="tab">Editar Dirección</a></li>
				              <li class="nav-item"><a class="nav-link" href="#usuario" data-toggle="tab">Usuario</a></li>

				            </ul>

              			</div><!-- /.card-header -->

              			<div class="card-body">

              				<div class="tab-content">

              					<div class="active tab-pane" id="datosUsuario">

              						<div class="card-header">

							            <h3 class="card-title">Datos Personales</h3>

							          </div>

							          <div class="card-body">

							          	<div class="row">

							          		<div class="col-md-6">

								          		<div class="form-group" >

								                    <label for="appointment_name" class="text-black">Nombre</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-user"></i></span>
								                      </div>

								                      <input type="text" class="form-control" id="" value="Taylor">

								                    </div>

								                </div>

								                <div class="form-group" >

								                    <label for="appointment_name" class="text-black">Fecha de Nacimiento</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-calendar"></i></span>
								                      </div>

								                      <input type="date" class="form-control" id="" value="1989-12-13">

								                    </div>

								                </div>

								                <div class="form-group" >

								                    <label for="appointment_name" class="text-black">RFC</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-address-card"></i></span>
								                      </div>

								                      <input type="text" class="form-control" id="" value="SIFT891213IU13" >

								                    </div>

									            </div>

									            <div class="form-group">

								                    <label for="appointment_name" class="text-black">Teléfono de Casa</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-phone"></i></span>
								                      </div>

								                      <input type="text" class="form-control" data-inputmask="'mask': ['99-99-99-99-99', '+99 99 99 99 99 99']" data-mask value="5510072713">

								                    </div>

								                </div>

								                <div class="form-group" >

								                    <label for="appointment_name" class="text-black">Clave INE</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-address-card"></i></span>
								                      </div>

								                      <input type="text" class="form-control" id="" value="SIFT891213IU13" >

								                    </div>

									            </div>

								                <!-- <button type="button" id="btnAgregarCliente" class="btn btn-primary float-left" style="margin-right: 5px;">
								                    <i class="fas fas fa-upload"></i> Cambiar foto
								                  </button> -->

								                  <!-- <input type="file" id="myFile" name="filename2"> -->


								          	<!-- ./col -->
								          	</div>

								          	<div class="col-md-6">

								          		<div class="form-group" >

								                    <label for="appointment_name" class="text-black">Apellido</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-users"></i></span>
								                      </div>

								                      <input type="text" class="form-control" id="" value="Swift">

								                    </div>

								                </div>

								                <div class="form-group" >

								                    <label for="appointment_name" class="text-black">CURP</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-address-card"></i></span>
								                      </div>

								                      <input type="text" class="form-control" id="" value="SIFT891213HDFNRTS03">

								                    </div>

									            </div>

									            <div class="form-group">

								                    <label for="appointment_name" class="text-black">Correo Elctrónico</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
								                      </div>

								                      <input type="text" class="form-control" value="taylor.swift13@gmail.com">

								                    </div>

									            </div>

									            <div class="form-group">

								                    <label for="appointment_name" class="text-black">Teléfono Móvil</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-phone"></i></span>
								                      </div>

								                      <input type="text" class="form-control" data-inputmask="'mask': ['99-99-99-99-99', '+99 99 99 99 99 99']" data-mask value="5510072713">

								                    </div>

								                </div>



								                 <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
								                    <i class="fas fa-download"></i>Guardar Cambios
								                  </button>

								          	<!-- ./col -->
								          	</div>

							          	</div>

							          <!-- ./carbody -->
							          </div>


                  				</div>
                  				<!-- /.tab-pane -->

                  				<div class="tab-pane" id="direccion">

                  					<div class="card-header">

							            <h3 class="card-title">Dirección</h3>

							        </div>

							        <div class="card-body">

							          	<div class="row">

							          		<div class="col-md-6">

							          			<div class="form-group">

								                    <label for="appointment_name" class="text-black">Código Postal</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
								                      </div>

								                      <input type="text" class="form-control">

								                    </div>

									             </div>

									             <!--  -->

							          			<div class="form-group">

									                    <label for="appointment_name" class="text-black">Municipio</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-city"></i></span>
								                      </div>

								                       <input type="text" class="form-control" >

								                      <!-- <select class="form-control select2" style="width: 100%;"
								                       id="MunicipioCliente"></select> -->



								                    </div>

								                </div>

									            <!-- <div class="form-group">

								                    <label for="appointment_name" class="text-black">Código Postal</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
								                      </div>

								                      <input type="text" class="form-control">

								                    </div>

									            </div> -->

									            <div class="form-group">

								                    <label for="appointment_name" class="text-black">Número y calle</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-city"></i></span>
								                      </div>

								                      <input type="text" class="form-control">

								                    </div>

								                </div>

								                <div class="form-group">

								                    <label for="appointment_name" class="text-black">Número Interior</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-city"></i></span>
								                      </div>

								                      <input type="text" class="form-control">

								                    </div>

								                </div>

							          		<!-- ./col -->
							          		</div>

							          		<div class="col-md-6">

							          			<div class="form-group" >

								                    <label for="appointment_name" class="text-black">Estado</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
								                      </div>

								                      <input type="text" class="form-control">

								                      <!-- <select class="form-control select2" style="width: 100%;" id="estadoCliente"></select> -->

								                    </div>

									            </div>



								                <div class="form-group">

								                    <label for="appointment_name" class="text-black">Colonia</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
								                      </div>

								                      <input type="text" class="form-control">

								                      <!-- <select class="form-control select2" style="width: 100%;" id="coloniaCliente" disabled></select>
	-->
								                    </div>

								                </div>

								                <div class="form-group">

								                    <label for="appointment_name" class="text-black">Número Exterior</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-house-user"></i></span>
								                      </div>

								                      <input type="text" class="form-control">

								                    </div>

								                </div>


							          		<!-- ./col -->
							          		</div>

							          		<button type="button" class="btn btn-info float-right" style="margin-right: 5px;">
								                    <i class="fas fa-download"></i>Guardar Cambios
								            </button>


							          	<!-- ./row -->
							          	</div>

							        <!-- ./card body -->
							        </div>

                  				</div>
                  				<!-- /.tab-pane -->

                  				<div class="tab-pane" id="usuario">

                  					<div class="card-header">

							            <h3 class="card-title">Datos de Usuario</h3>

							        </div>

							        <div class="card-body">

							          	<div class="row">

							          		<div class="col-md-6">

							          			<div class="form-group">

								                    <label for="appointment_name" class="text-black">Nombre de Usuario</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-user"></i></span>
								                      </div>

								                      <input type="text" class="form-control" value="tay.swift13" disabled>

								                    </div>

									            </div>

									            <div class="form-group">

								                    <label for="appointment_name" class="text-black">Contraseña</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">

								                          <span class="input-group-text"><i class="fas fa-lock"></i></span>

								                          <div style="background-color: white; cursor: pointer;" id="cajaEyePassPerfil" class="input-group-text">

                											<span style="cursor: pointer;" class="fas fa-eye" id="mostrarPassPerfil"></span>


              											  </div>

								                      </div>

								                      <input type="password" class="form-control" id="passPerfil" value="taylorswift13" >

								                    </div>

									            </div>

									            <div class="form-group">

								                    <label for="appointment_name" class="text-black">Confirmar Contraseña</label>

								                    <div class="input-group">

								                      <div class="input-group-prepend">
								                          <span class="input-group-text"><i class="fas fa-lock"></i></span>

								                          <div style="background-color: white;" id="cajaEyePassPerfilCon" class="input-group-text">

                											<span style="cursor: pointer;" class="fas fa-eye" id="mostrarPassPerfilCon"></span>


              											  </div>

								                      </div>

								                      <input type="password" class="form-control" id="passPerfilCon" value="taylorswift13" >

								                    </div>

									            </div>

											<!-- ./col -->
							          		</div>

										<!-- ./row -->
							          	</div>

							          	<div class="row no-print">

								                <div class="col-12">

								                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
								                    <i class="fas fa-download"></i> Guardar Cambios
								                  </button>

								                </div>

								        </div>

							        <!-- ./card body -->
							        </div>




                  				</div>
                  				<!-- /.tab-pane -->

                			</div>
                			<!-- /.tab-content -->

              			</div><!-- /.card-body -->

            		</div>
            		<!-- /.card -->

          		</div>
          		<!-- /.col -->

	    	</div>
	        <!-- /.row -->

      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->

<!-- End content*wrapper -->
</div>
