
  <!-- Modal CREAR REGISTRO -->
  <div class="modal fade" id="modal_bono_aporteAmbiental" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h3 id="titulo_bono">BONO APORTE AMBIENTAL</h3>
        </div>
        <div class="modal-body">
      
        <form id="formulario_aporte_ambiental" name="formulario_aporte_ambiental" class="form-horizontal" enctype="multipart/form-data">

                <input type="hidden" class="form-control" name="solicitud_id" id="solicitud_id" >
                <input type="hidden" class="form-control" name="tipo" id="tipo" >

                  <div class="form-row">

                      <div class="col-md-6 form-group">
                          <div class="form-group">
                          <label for="nombre_apellido">Nombre(s) y Apellido(s)</label>
                          <input type="text" class="form-control" name="nombre_apellido" id="nombre_apellido" placeholder="" required="">
                        </div>
                      </div>

                      <div class="col-md-6 form-group">
                        <div class="form-group">
                          <label for="identificacion">Identificación</label>
                          <input type="text" class="form-control" name="identificacion" id="identificacion" placeholder="" required="">
                        </div>
                      </div>

                      <div class="col-md-6 form-group">
                        <div class="form-group">
                          <label for="direccion">Dirección</label>
                          <input type="text" class="form-control" name="direccion" id="direccion" placeholder="" required="">
                        </div>
                      </div>

                      <div class="col-md-6 form-group">
                          <div class="form-group">
                            <label for="departamento">Departamento</label>
                            <input type="text" class="form-control" id="departamento" name="departamento" placeholder="">
                          </div>
                      </div>

                      <div class="col-md-6 form-group">
                          <div class="form-group">
                            <label for="municipio">Municipio</label>
                            <input type="text" class="form-control" id="municipio" name="municipio" placeholder="">
                          </div>
                      </div>

                      <div class="col-md-6 form-group">
                          <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="" required="">
                          </div>
                      </div>

             
                      <div class="col-md-6 form-group">
                          <div class="form-group">
                            <label for="correo electronico">Correo Electrónico</label>
                            <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" placeholder="name@example.com" >
                          </div>
                      </div>

                      <div class="col-md-6 form-group">
                          <div class="form-group">
                              <label for="cantidad arboles">Fecha de expedición del certificado</label>
                              <input type="date" class="form-control" name="fecha_expedicion" id="fecha_expedicion" placeholder="" required>
                          </div>
                      </div>

                      <div class="col-md-6 form-group">
                          <div class="form-group">
                          <label for="cantidad arboles">Cantidad Arboles</label>
                          <input type="number" class="form-control" name="cantidad_arboles" id="cantidad_arboles" placeholder="" required>
                          </div>
                      </div>
                  </div>


                  <div class="container" id="pago" style="border: solid; padding: 3%; margin-bottom: 3%;">

                    <h2 style="text-align:center">FACTURAR</h2>


                    <div class="form-row">

                      <div class="col-md-6 form-group">
                        <div class="form-group">
                        <label for="identificacion">Nit o Cedula</label>
                        <input  type="text" class="form-control" name="identificacion_facturar" id="identificacion_facturar" placeholder="">
                        </div>
                      </div>

                      <div class="col-md-6 form-group">
                        <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input  type="text" class="form-control" name="nombre_facturar" id="nombre_facturar" placeholder="">
                        </div>
                      </div>

                      <div class="col-md-6 form-group">
                        <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="mail" class="form-control" name="correo_facturar" id="correo_facturar" placeholder="">
                        </div>
                      </div>

                      <div class="col-md-6 form-group">
                        <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input  type="text" class="form-control" name="direccion_facturar" id="direccion_facturar" placeholder="">
                        </div>
                      </div>

                      <div class="col-md-6 form-group">
                        <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input  type="text" class="form-control" name="telefono_facturar" id="telefono_facturar" placeholder="">
                        </div>
                      </div>

                      <div class="col-md-6 form-group">
                        <div class="form-group">
                        <label for="ciudad">Ciudad</label>
                        <input  type="text" class="form-control" name="ciudad_facturar" id="ciudad_facturar" placeholder="">
                        </div>
                      </div>

                    </div>

                    <div class="form-group">
                    <label for="forma de pago">Elija un medio de pago</label>
                    <select required="" class="form-control" id="medio_pago" name="medio_pago">
                      <option value=""></option>
                      <option value="Efectivo">Efectivo</option>
                      <option value="Nómina">Nómina</option>
                      <!--<option value="Credito">Credito</option>-->
                    </select>
                    </div> 

                    <div class="form-group">
                    <label for="observaciones">Observaciones</label>
                    <textarea class="form-control" id="observaciones" name="observaciones" rows="3"></textarea>
                    </div>


                    <div class="row" id="seccion_credito" style="display: none;">
                    <div class="col-md-5 form-group ">
                    <div class="form-group">
                      <label for="cuota 1">Valor Cuota 1</label>
                      <input type="number" class="form-control credito" name="valor_1" id="cuota_1" placeholder="">
                    </div>
                    </div>

                    <div class="col-md-5 form-group ">
                    <div class="form-group">
                      <label for="cuota 1">Fecha Cuota 1</label>
                      <input type="date" class="form-control credito" name="fecha_1" id="fecha_1" placeholder="">
                    </div>
                    </div>

                    <div class="col-md-2 form-group ">
                    <label for="forma de pago">Pago</label>
                    <select class="form-control credito" id="pago_1" name="pago_1">
                      <option value="No">No</option>
                      <option value="Si">Si</option>
                    </select>
                    </div> 

                    <div class="col-md-5 form-group ">
                    <div class="form-group">
                      <label for="cuota 2">Valor Cuota 2</label>
                      <input type="number" class="form-control credito" name="valor_2" id="cuota_2" placeholder="">
                    </div>
                    </div>

                    <div class="col-md-5 form-group ">
                    <div class="form-group">
                      <label for="cuota 1">Fecha Cuota 2</label>
                      <input type="date" class="form-control credito" name="fecha_2" id="fecha_2" placeholder="">
                    </div>
                    </div>


                    <div class="col-md-2 form-group ">
                    <label for="forma de pago">Pago</label>
                    <select class="form-control credito" id="pago_2" name="pago_2">
                      <option value="No">No</option>
                      <option value="Si">Si</option>
                    </select>
                    </div> 

                    </div>

                    </div>

            </div>
            
            <div class="col-sm-offset-2 col-sm-10">
            <button  type="submit" class="btn btn-primary" id="saveBtn" value="create">Guardar Información
            </button>
            </div>
            
            <br>
  
        </form>

        </div>
  

      </div>
      
    </div>
  </div>