<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1 class="m-0">Agregar Nuevo Usuario</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Agregar Usuario</li>

            </ol>

          </div><!-- /.col -->

        </div><!-- /.row -->

      </div><!-- /.container-fluid -->

  </div>

  <section class="content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12">

                    <div class="row">

                      <div class="card card-default col-12">

                        <div class="card-header bg-primary">

                          <h3 class="card-title">Datos del Usuario</h3>

                        </div>

                        <div class="card-body">

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label for="appointment_name" class="text-black">Nombre</label>

                                        <div class="input-group">

                                          <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                                          </div>

                                          <input type="text" class="form-control">

                                        </div>

                                     </div>

                                    <!--  -->
                                    <div class="form-group">

                                        <label for="appointment_name" class="text-black">Teléfono</label>

                                        <div class="input-group">

                                          <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                          </div>

                                          <input type="text"  class="form-control" data-inputmask="'mask': ['99-99-99-99-99', '+99 99 99 99 99 99']" data-mask >

                                        </div>

                                    </div>

                                    <div class="form-group">

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

                                     <div class="form-group">

                                        <label for="appointment_name" class="text-black">Correo Elctrónico</label>

                                        <div class="input-group">

                                          <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                          </div>

                                          <input type="text" class="form-control">

                                        </div>

                                    </div>

                                <!-- ./1ra colmna -->
                                </div>

                                <div class="col-md-6">

                                   <div class="form-group" id="campoApellido">

                                      <label for="appointment_name" class="text-black">Apellido</label>

                                      <div class="input-group">

                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-users"></i></span>
                                        </div>

                                        <input type="text" class="form-control" id="apellidoCliente" >

                                      </div>

                                    </div>

                                    <div class="form-group">

                                        <label for="appointment_name" class="text-black">Código Postal</label>

                                        <div class="input-group">

                                          <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                          </div>

                                          <input type="text" class="form-control">

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label for="appointment_name" class="text-black">Municipio</label>

                                        <div class="input-group">

                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-city"></i></span>
                                            </div>

                                             <input type="text" class="form-control">

                                            <!-- <select class="form-control select2" style="width: 100%;"
                                             id="MunicipioCliente"></select> -->

                                          </div>

                                    </div>

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
                                              <span class="input-group-text"><i class="far fa-building"></i></span>
                                          </div>

                                          <input type="text" class="form-control">

                                        </div>

                                    </div>

                                  <div class="form-group">

                                      <label for="appointment_name" class="text-black">RFC</label>

                                      <div class="input-group">

                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                        </div>

                                        <input type="text" class="form-control">

                                      </div>

                                  </div>

                                <!-- ./2ra colmna -->
                                </div>

                            </div>

                            <div class="row no-print">

                                <div class="col-12">

                                  <button type="button"class="btn btn-primary float-right" style="margin-right: 5px;">
                                    <i class="fas fa-download"></i> Agregar Usuario
                                  </button>

                                </div>

                             </div>

                        </div>

                      <!-- .7card -->
                      </div>

                    <!-- row -->
                    </div>

                </div><!-- /.col -->

            </div><!-- /.row -->

        </div><!-- /.container-fluid -->

    </section>


<!-- ./content -->
</div>