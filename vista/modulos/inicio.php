<?php

$servidor = Ruta::ctrRutaServidor();

?>

<style>

  .alinearCodigo{

    margin-left: 24%;

  }

</style>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Content Header (Page header) -->
    <div class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1 class="m-0">Manager System</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="inicio">Home</a></li>

              <li class="breadcrumb-item active">Manager System</li>

            </ol>

          </div><!-- /.col -->

        </div><!-- /.row -->

      </div><!-- /.container-fluid -->

    <!-- Content Header (Page header) -->
    </div>


    <!--=====================================
  	CONTENIDO PRINCIPAL
  	======================================-->

  	<!-- Main content -->
    <section class="content">

    	<div class="container-fluid">

    		<!-- Cajas informativas -->
			<div class="row">

				<div class="col-12 col-sm-6 col-md-3">

		            <div class="info-box mb-3">

		              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>


		              <div class="info-box-content">

		                <span class="info-box-text">Ventas</span>

		                <span class="info-box-number">760</span>

		              </div>
		              <!-- /.info-box-content -->

		            </div>
		            <!-- /.info-box -->

		        </div>
		        <!-- /.col -->

		        <div class="col-12 col-sm-6 col-md-3">

		            <div class="info-box mb-3">

		              <span class="info-box-icon bg-info elevation-1"><i class="fa fa-cubes"></i></span>


		              <div class="info-box-content">

		                <span class="info-box-text">Productos Vendidos</span>

		                <span class="info-box-number">3500</span>

		              </div>
		              <!-- /.info-box-content -->

		            </div>
		            <!-- /.info-box -->

		        </div>
		        <!-- /.col -->

		        <!-- fix for small devices only -->
		        <div class="clearfix hidden-md-up"></div>

		        <div class="col-12 col-sm-6 col-md-3">

		            <div class="info-box mb-3">

		              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-donate"></i></span>


		              <div class="info-box-content">

		                <span class="info-box-text">Ganancias</span>

		                <span class="info-box-number">$135,000.00</span>

		              </div>
		              <!-- /.info-box-content -->

		            </div>
		            <!-- /.info-box -->

		        </div>
		        <!-- /.col -->

		        <div class="col-12 col-sm-6 col-md-3">

		            <div class="info-box mb-3">

		              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-cubes"></i></span>


		              <div class="info-box-content">

		                <span class="info-box-text">Productos Agotados</span>

		                <span class="info-box-number">13</span>

		              </div>
		              <!-- /.info-box-content -->

		            </div>
		            <!-- /.info-box -->

		        </div>
		        <!-- /.col -->

			</div>
        	<!-- /.row -->

        	<!-- Main row -->
        	<div class="row">

        		<!--=====================================
          		ESCANEO DE PRODUCTOS
          		======================================-->

          		 <!-- Left col -->
          		<section class="col-lg-12">

              		<center>

              			<div class="card card-default col-6">

                  			<div class="card-header bg-info">

			                      <h3 class="card-title">Levantar Compra</h3>

			                      <div class="card-tools">

			                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
			                          <i class="fas fa-minus"></i>
			                        </button>

			                      </div>

                  			</div>

                  			<div class="card-body">

			                    <div class="row">

			                      <div class="col-md-6 alinearCodigo">

			                          <div class="form-group">

			                            <label for="appointment_name" class="text-black">Código del producto</label>

			                            <div class="input-group">

			                              <div class="input-group-prepend">
			                                  <span class="input-group-text"><i class="fas fa-address-card"></i></span>
			                              </div>

			                              <input type="text" class="form-control" id="codigoProducto">

			                            </div>

			                          </div>

			                      </div>



			                    </div>

			                <!-- end card body -->
			                </div>

			                <div class="card-footer text-muted">

		                        Para Simular la Pistola Lector Código De Barras utilice los siguientes
		                        códigos y de enter: <br>
		                        243564129 <br> 501314704057 <br> 9425233701 <br> 9019845409 <br> 243873762 <br> 0243503484

                  			</div>

              			<!-- end car -->
              			</div>

            		</center>

            	</section>

            	<!--=====================================
	             DETALLE DE LA COMPRA
	            ======================================-->

	            <!-- Left col -->
	            <section class="col-lg-12">

	                  <center>

	                  	<div class="card card-default col-8">

                      		<div class="card-header bg-primary">

		                        <h3 class="card-title">Detalles de la compra</h3>

		                        <div class="card-tools">

		                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
		                            <i class="fas fa-minus"></i>
		                          </button>

		                        </div>

                      		</div>

                      		<div class="card-body">

                          		<div class="row">

		                            <div class="col-12 table-responsive">

		                               <table class="table table-striped table-hover">

		                                  <thead>

		                                    <tr>

		                                      <th># serie</th>
		                                      <th>Qty</th>
		                                      <th>Producto</th>
		                                      <th>Modelo</th>
		                                      <th>Precio Unitario</th>
		                                      <th>Subtotal</th>

		                                    </tr>

		                                  </thead>

		                                  <tbody id="datoscarritoFin">
		                                  </tbody>

		                               </table>

		                            </div>
		                            <!-- /.col -->

                          		</div>
                          		<!-- /.row -->

		                        <div class="row">

		                          	<!-- accepted payments column -->
		                            <div class="col-6">

		                                <p class="lead">Métodos de Pago:</p>
		                                <img src="vista/dist/img/credit/visa.png" alt="Visa">
		                                <img src="vista/dist/img/credit/mastercard.png" alt="Mastercard">
		                                <img src="vista/dist/img/credit/american-express.png" alt="American Express">
		                                <img src="vista/dist/img/credit/money-icon.jpg" alt="cash">

		                                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
		                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
		                                    plugg
		                                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
		                                </p>

		                            </div>

		                            <div class="col-6">

		                                <p class="lead">Fecha compra: <strong><?php echo date('d-m-Y'); ?></strong></p>

		                                <div class="table-responsive">

		                                  <table class="table">

		                                    <tr>
		                                      <th>Número de Articulos:</th>
		                                      <td id="cantidadArticulosLay"></td>
		                                    </tr>
		                                    <tr>
		                                      <th style="width:50%">Subtotal:</th>
		                                      <td id="subtotalPedidoLay"></td>
		                                    </tr>
		                                    <tr>
		                                      <th>Total:</th>
		                                      <td id="totalPedidoLay"></td>
		                                    </tr>

		                                  </table>

		                                </div>

		                            </div>
		                            <!-- /.col -->

		                        </div>
		                        <!-- /.row -->

                          <div class="row no-print">

                              <div class="col-12">

                                    <button type="button" id="btnFinalizarPago" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Finalizar
                                    Compra
                                    </button>

                                  <!-- <a href="vista/modulos/detalles-pago-print.php"> -->
                                  <a href="carrito" target="_blank">

                                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                      <i class="nav-icon fa fa-shopping-bag"></i> Ir a la cesta de compra
                                    </button>

                                  </a>

                                  <!-- <a href="vista/modulos/detalles-pago-print.php"> -->
                                  <!-- <a href="vista/modulos/detalles-pago-print.php" target="_blank"> -->

                                    <button type="button" id="generarPDFCompra" class="btn btn-danger float-right" style="margin-right: 5px;">
                                      <i class="fas fa-download"></i> Imprimir PDF de Compra
                                    </button>

                                  <!-- </a> -->

                              </div>

                          </div>

                          <!--  -->

                      <!-- end card body -->
                      </div>

                  			<!-- end car -->
                  			</div>


	                  </center>

	            </section>

        	<!-- end main row-->
        	</div>

    	</div><!--/. container-fluid -->

    <!-- Main content -->
    </section>

</div>

<!--=====================================
MODAL COMPRAR PRODUCTO
=====================================-->

<div class="modal fade" id="modalEscanearProducto" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel"
 aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

          <div class="modal-header bg-info">

              <h5 class="modal-title" id="modalAppointmentLabel"><i class="fas fa-shopping-cart"></i> Comprar Producto</h5>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                <span aria-hidden="true">&times;</span>

              </button>

          </div>

            <div class="modal-body">

              <form action="#">

                    <div class="text-center">
                          <img src="vista/dist/img/prod-1.jpg" style="width: 30%" class="rounded" >
                    </div>

                    <div class="card-body">

                        <h4 id="nombreLayComprarProductoEsc"></h4>

                        <h5 id="modeloLayComprarProductoEsc"></h5>

                        <h5>Tipo de producto: <strong id="tipoLayComprarProductoEsc"></strong></h5>

                        <h5>Precio: <strong id="precioLayComprarProductoEsc"></strong></h5>

                        <h5>Cantidad: <strong id="cantidadProductoComprarEsc" precioFinal="0" >1</strong></h5>

                        <h5>Total: <strong id="totalLayComprarProductoEsc"  precioFinal="0" totalPrecioProducto="0"></strong></h5>

                    </div>

                    <input type="hidden" id="idProductoComprarEs">
                    <input type="hidden" id="estatusProductoComprarEsc">
                    <input type="hidden" id="cantidadBDProductoComprarEsc">


                  <div class="form-group">

                    <input type="button" id="comprarProductoEsc" value="Añadir Producto" class="btn btn-success">

                    <!-- 243564129 501314704057 9425233701 9019845409 243873762 0243503484 -->

                  </div>

              </form>

            </div>

        </div>

    </div>

</div>