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

                      <div class="card-body p-0">

                          <div class="bs-stepper">

                              <div class="bs-stepper-header" role="tablist">

                                  <div class="step" data-target="#personal-part">

                                    <button type="button" class="step-trigger" role="tab" aria-controls="personal-part" id="personal-part-trigger">

                                      <span class="bs-stepper-circle">1</span>
                                      <span class="bs-stepper-label">Datos Personales</span>

                                    </button>

                                  </div>

                                  <div class="line"></div>

                                  <div class="step" data-target="#address-part">

                                    <button type="button" class="step-trigger" role="tab" aria-controls="address-part" id="address-part-trigger">

                                      <span class="bs-stepper-circle">2</span>
                                      <span class="bs-stepper-label">Dirección</span>

                                    </button>

                                  </div>

                                  <div class="line"></div>

                                  <div class="step" data-target="#user-part">

                                    <button type="button" class="step-trigger" role="tab" aria-controls="user-part" id="user-part-trigger">

                                      <span class="bs-stepper-circle">3</span>
                                      <span class="bs-stepper-label">Datos de Sesión</span>

                                    </button>

                                  </div>

                              </div>

                              <div class="bs-stepper-content">
                              <!-- your steps content here -->

                                <div id="personal-part" class="content" role="tabpanel" aria-labelledby="personal-part-trigger">

                                  <div class="card-body">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                              <label for="appointment_name" class="text-black">Nombre</label>

                                              <div class="input-group">

                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>

                                                <input type="text" class="form-control" id="nombreAgregar">

                                              </div>

                                              <i class="fas " id="icoOkNombre"></i> &nbsp;
                                              <span id="layValNombre" style="color: red; font-size: 11px;"></span>
                                              <!-- <i class="fas fa-check text-success" id="icoOkNombre"></i> -->

                                            </div>

                                            <div class="form-group" >

                                                <label for="appointment_name" class="text-black">Fecha de Nacimiento</label>

                                                <div class="input-group">

                                                  <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                                  </div>

                                                  <input type="date" class="form-control" id="fechaNacAgregar">

                                                </div>

                                                <i class="fas " id="icoOkFechaNac"></i> &nbsp;
                                                <span id="layValFechaNac" style="color: red; font-size: 11px;"></span>

                                            </div>

                                            <div class="form-group">

                                                  <label for="appointment_name" class="text-black">Clave Ine</label>

                                                  <div class="input-group">

                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                                    </div>

                                                    <input type="text" class="form-control" id="claveIneAgregar">

                                                  </div>

                                                  <i class="fas " id="icoOkClaveIne"></i> &nbsp;
                                                  <span id="layValClaveIne" style="color: red; font-size: 11px;"></span>

                                            </div>

                                            <div class="form-group">

                                                <label for="appointment_name" class="text-black">Teléfono Celular</label>

                                                <div class="input-group">

                                                  <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                    </div>

                                                    <!-- <input type="text" id="celularAgregar"  class="form-control" data-inputmask="'mask': ['99-99-99-99-99', '+99 99 99 99 99 99']" data-mask > -->
                                                    <input type="text" id="celularAgregar"  class="form-control" data-inputmask="'mask': ['99-99-99-99-99']" data-mask >

                                                </div>

                                                <i class="fas " id="icoOkTelcel"></i> &nbsp;
                                                <span id="layValTelcel" style="color: red; font-size: 11px;"></span>

                                            </div>

                                            <div class="form-group">

                                                <label for="appointment_name" class="text-black">Correo Electrónico</label>

                                                <div class="input-group">

                                                  <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                  </div>

                                                  <input type="email" class="form-control" id="correoAgregar">

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                           <div class="form-group" id="campoApellido">

                                                <label for="appointment_name" class="text-black">Apellido</label>

                                                <div class="input-group">

                                                  <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-users"></i></span>
                                                  </div>

                                                  <input type="text"class="form-control" id="apellidoAgregar" >

                                                </div>

                                                <i class="fas " id="icoOkApellido"></i> &nbsp;
                                                <span id="layValApellido" style="color: red; font-size: 11px;"></span>

                                            </div>

                                            <div class="form-group">

                                                  <label for="appointment_name" class="text-black">CURP</label>

                                                  <div class="input-group">

                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                                    </div>

                                                    <input type="text" class="form-control" id="curpAgregar">

                                                  </div>

                                                  <i class="fas " id="icoOkCurp"></i> &nbsp;
                                                  <span id="layValCurp" style="color: red; font-size: 11px;"></span>


                                            </div>

                                            <div class="form-group">

                                                  <label for="appointment_name" class="text-black">RFC</label>

                                                  <div class="input-group">

                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                                    </div>

                                                    <input type="text" class="form-control" id="rfcAgregar">

                                                  </div>

                                                  <i class="fas " id="icoOkRfc"></i> &nbsp;
                                                  <span id="layValRfc" style="color: red; font-size: 11px;"></span>

                                            </div>

                                            <div class="form-group">

                                                <label for="appointment_name" class="text-black">Teléfono de Casa</label>

                                                <div class="input-group">

                                                  <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                    </div>

                                                    <!-- <input type="text" id="telefonoAgregar"  class="form-control" data-inputmask="'mask': ['99-99-99-99-99', '+99 99 99 99 99 99']" data-mask > -->
                                                    <input type="text" id="telefonoAgregar"  class="form-control" data-inputmask="'mask': ['99-99-99-99-99']" data-mask >

                                                </div>

                                                <i class="fas " id="icoOkTel"></i> &nbsp;
                                                <span id="layValTel" style="color: red; font-size: 11px;"></span>

                                            </div>

                                        </div>


                                    </div>

                                  </div>



                                  <!-- <button class="btn btn-primary" id="sigPersonalAgregar" onclick="stepper.next()">Siguiente</button> -->

                                  <button class="btn btn-default disabled" id="sigPersonalAgregar">Siguiente</button>



                                </div>

                                <div id="address-part" class="content" role="tabpanel" aria-labelledby="address-part-trigger">

                                  <div class="card-body">

                                    <div class="row">

                                      <div class="col-md-6">

                                          <div class="form-group">

                                              <label for="appointment_name" class="text-black">Código Postal</label>

                                              <div class="input-group">

                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                                </div>

                                                <input type="text" id="cpAgregar" class="form-control">

                                              </div>

                                          </div>

                                          <div class="form-group">

                                                <label for="appointment_name" class="text-black">Municipio</label>

                                                <div class="input-group">

                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-city"></i></span>
                                                    </div>

                                                     <input type="text" disabled id="municipioAgregar" class="form-control">

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

                                                <input type="text" id="calleAgregar" class="form-control">

                                              </div>

                                          </div>

                                          <div class="form-group">

                                              <label for="appointment_name" class="text-black">Número Interior</label>

                                              <div class="input-group">

                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-building"></i></span>
                                                </div>

                                                <input type="text" id="numIntAgregar" class="form-control">

                                              </div>

                                          </div>

                                      </div>

                                      <div class="col-md-6">

                                          <div class="form-group">

                                              <label for="appointment_name" class="text-black">Estado</label>

                                              <div class="input-group">

                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                                </div>

                                                <input type="text" disabled id="estadoAgregar" class="form-control">

                                                <!-- <select class="form-control select2" style="width: 100%;" id="estadoCliente"></select> -->

                                              </div>

                                          </div>

                                          <div class="form-group">

                                              <label for="appointment_name" class="text-black">Colonia</label>

                                              <div class="input-group">

                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                                </div>

                                                <!-- <input type="text" class="form-control"> -->

                                                <select class="form-control select2" id="coloniaAgregar" style="width: 100%;" >
                                                  <option value="sn">-----------</option>
                                                </select>

                                              </div>

                                          </div>

                                          <div class="form-group">

                                              <label for="appointment_name" class="text-black">Número Exterior</label>

                                              <div class="input-group">

                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-house-user"></i></span>
                                                </div>

                                                <input type="text" id="numExtAgregar" class="form-control">

                                              </div>

                                          </div>

                                      </div>

                                    </div>

                                  </div>

                                  <button class="btn btn-default" onclick="stepper.previous()">Anterior</button>
                                  <button class="btn btn-primary" onclick="stepper.next()">Siguiente</button>


                                </div>

                                <div id="user-part" class="content" role="tabpanel" aria-labelledby="user-part-trigger">

                                    <div class="card-body">

                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="form-group">

                                                      <label for="appointment_name" class="text-black">Nombre de Usuario</label>

                                                      <div class="input-group">

                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                        </div>

                                                        <input type="text" class="form-control" id="usernameAgregar">

                                                      </div>

                                                </div>

                                                <br>

                                                <div class="form-group">

                                                    <label for="appointment_name" class="text-black">Contraseña</label>

                                                    <div class="input-group">

                                                      <div class="input-group-prepend">

                                                          <span class="input-group-text"><i class="fas fa-lock"></i></span>

                                                          <div style="background-color: white; cursor: pointer;" id="cajaEyePassAgregar" class="input-group-text">

                                                      <span style="cursor: pointer;" class="fas fa-eye" id="mostrarPassAgregar"></span>


                                                      </div>

                                                      </div>

                                                      <input type="password" class="form-control" id="passAgregar">

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                 <div class="form-group">

                                                    <label for="appointment_name" class="text-black">Rol de Perfil</label>

                                                    <div class="input-group">

                                                      <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                      </div>

                                                      <!-- <input type="text" class="form-control"> -->

                                                      <select class="form-control select2" id="rolAgregar" style="width: 100%;" >
                                                        <option value="sn">Elige una Opción</option>
                                                        <option value="2">Editor</option>
                                                        <option value="3">Vendedor</option>
                                                      </select>

                                                    </div>

                                                 </div>

                                                 <div class="form-group">

                                                      <label for="appointment_name" class="text-black">Confirmar Contraseña</label>

                                                      <div class="input-group">

                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>

                                                            <div style="background-color: white;" id="cajaEyePassAgregarCon" class="input-group-text">

                                                        <span style="cursor: pointer;" class="fas fa-eye" id="mostrarPassAgregarCon"></span>


                                                        </div>

                                                        </div>

                                                        <input type="password" class="form-control" id="passAgregarCon" >

                                                      </div>

                                                  </div>

                                            </div>

                                        </div>

                                        <button class="btn btn-default" onclick="stepper.previous()">Anterior</button>

                                        <input type="button" class="btn btn-success" value="Guardar Cambios">

                                    </div>


                                </div>


                          </div>

                          <!-- ./bs-stepper -->

                      <!-- ./ cardbody -->
                      </div>


                  <!--./ card card-default col-12  -->
                  </div>

                <!-- ./ row -->
                </div>

            <!-- ./ col12 -->
            </div>

        <!-- ./row -->
        </div>

  <!-- ./content -->
  </section>

<!-- ./content -->
</div>