
  <!-- Modal CREAR REGISTRO -->
  <div class="modal fade" id="modal_bono" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

        <h3 id="titulo_bono"></h3>
    
        </div>
        <div class="modal-body">
      
        <form id="formulario_solicitud" name="formulario_solicitud" class="form-horizontal" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Solicitante</label>
                    <select class="form-control" id="solicitante" name="solicitante">
                      <option value="">Elija una opcion</option>
                      <option value="pn">Persona Natural</option>
                      <option value="pj">Persona Jurídica</option>
                    </select>
                </div> 

                <input type="hidden" id="tipo_bono" name="tipo_bono">

                <div id="formulario"> <!-- inicio formulario -->
                  <div class="container" id='persona_natural' style="border: solid;padding: 3%;margin-bottom: 3%; display:none" >

                    <h2 style="text-align:center">DONANTE</h2>


          
                      <div class="form-row">
                        <div class="col-md-6 form-group">
                          <div class="form-group">
                          <label for="nombre_apellido">Nombre(s) y Apellido(s)</label>
                          <input type="text" class="form-control" name="nombre_apellido" id="nombre_apellido" placeholder="">
                        </div>
                      </div>

                      <div class="col-md-6 form-group">
                        <div class="form-group">
                          <label for="identificacion">Identificación</label>
                          <input type="text" class="form-control" name="identificacion" id="identificacion" placeholder="">
                        </div>
                      </div>

                      <div class="col-md-6 form-group">
                        <div class="form-group">
                          <label for="direccion">Dirección</label>
                          <input type="text" class="form-control" name="direccion_pn" id="direccion_pn" placeholder="">
                        </div>
                      </div>

                      <div class="col-md-6 form-group">
                          <div class="form-group">
                            <label for="departamento">Departamento</label>
                            <input type="text" class="form-control" id="departamento_pn" name="departamento_pn" placeholder="">
                          </div>
                      </div>

                      <div class="col-md-6 form-group">
                          <div class="form-group">
                            <label for="municipio">Municipio</label>
                            <input type="text" class="form-control" id="municipio_pn" name="municipio_pn" placeholder="">
                          </div>
                      </div>

                      <div class="col-md-6 form-group">
                          <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="text" class="form-control" name="telefono_pn" id="telefono_pn" placeholder="">
                          </div>
                      </div>

                      <div class="col-md-6 form-group">
                          <div class="form-group">
                            <label for="correo electronico">Correo Electrónico</label>
                            <input type="email" class="form-control" id="correo_pn" name="correo_pn" placeholder="name@example.com">
                          </div>
                      </div>


                 

                      <div class="col-md-6 form-group motivo">
                          <div class="form-group">
                          <label for="motivo">Motivo</label>
                            <select class="form-control " id="motivo_pn" name="motivo_pn">
                              <option value="">Elija una opcion</option>
                              <option value="Nacimiento">Nacimiento</option>
                              <option value="Boda">Boda</option>
                              <option value="Cumpleaños">Cumpleaños</option>
                              <option value="Grado">Grado</option>
                            </select>
                          </div>
                      </div>

                      <div class="quien col-md-6 form-group ">
                          <div class="form-group">
                            <label for="quien">Fallecido</label>
                            <input type="text" class="form-control" id="quien_pn" name="quien_pn" placeholder="">
                          </div>
                      </div>

                      <div class="trato col-md-6 form-group ">
                          <div class="form-group">
                            <label for="trato">Trato</label>
                            <input type="text" class="form-control" id="trato_pn" name="trato_pn" placeholder="del señor -- de la señora -- del Dr">
                          </div>
                      </div>

                      <div class="manifestacion col-md-6 form-group ">
                          <div class="form-group">
                            <label for="trato">Manifestacion</label>
                            <input type="text" class="form-control" id="manifestacion_pn" name="manifestacion_pn" placeholder="lamenta -- lamentan -- felicita -- felicitan">
                          </div>
                      </div>



                    </div>
                    </div>

                    <div class="container" id='persona_juridica' style="border: solid;padding: 3%;margin-bottom: 3%; display:none">

                    <h2 style="text-align:center">DONANTE</h2>

                      <div class="form-row">
                        <div class="col-md-6 form-group">
                          <div class="form-group">
                          <label for="nombre_apellido">Razón Social</label>
                          <input type="text" class="form-control" name="razon_social" id="razon_social" placeholder="">
                        </div>
                      </div>


                    <div class="col-md-6 form-group">
                        <div class="form-group">
                          <label for="identificacion">Nit</label>
                          <input type="text" class="form-control" name="nit" id="nit" placeholder="">
                        </div>
                    </div>


                    <div class="col-md-6 form-group">
                        <div class="form-group">
                          <label for="direccion">Dirección</label>
                          <input type="text" class="form-control" name="direccion_pj" id="direccion_pj" placeholder="">
                        </div>
                    </div>

                    <div class="col-md-6 form-group">
                          <div class="form-group">
                            <label for="departamento">Departamento</label>
                            <input type="text" class="form-control" id="departamento_pj" name="departamento_pj" placeholder="">
                          </div>
                      </div>

                      <div class="col-md-6 form-group">
                          <div class="form-group">
                            <label for="municipio">Municipio</label>
                            <input type="text" class="form-control" id="municipio_pj" name="municipio_pj" placeholder="">
                          </div>
                      </div>

                    <div class="col-md-6 form-group">
                        <div class="form-group">
                          <label for="telefono">Teléfono</label>
                          <input type="text" class="form-control" name="telefono_pj" id="telefono_pj" placeholder="">
                        </div>
                    </div>

                    <div class="col-md-6 form-group">
                        <div class="form-group">
                          <label for="correo electronico">Correo Electrónico</label>
                          <input type="email" class="form-control" id="correo_pj" name="correo_pj" placeholder="name@example.com">
                        </div>
                    </div>

               
                    <div class="col-md-6 form-group motivo">
                          <div class="form-group">
                          <label for="motivo">Motivo</label>
                            <select class="form-control " id="motivo_pj" name="motivo_pj">
                              <option value="">Elija una opcion</option>
                              <option value="Nacimiento">Nacimiento</option>
                              <option value="Boda">Boda</option>
                              <option value="Cumpleaños">Cumpleaños</option>
                              <option value="Grado">Grado</option>
                            </select>
                          </div>
                      </div>
            
                      <div class="quien col-md-6 form-group ">
                          <div class="form-group">
                            <label for="quien">Fallecido</label>
                            <input type="text" class="form-control" id="quien_pj" name="quien_pj" placeholder="">
                          </div>
                      </div>

                      <div class="trato col-md-6 form-group ">
                          <div class="form-group">
                            <label for="trato">Trato</label>
                            <input type="text" class="form-control" id="trato_pj" name="trato_pj" placeholder="del señor -- de la señora -- del Dr">
                          </div>
                      </div>

                      <div class="manifestacion col-md-6 form-group ">
                          <div class="form-group">
                            <label for="trato">Manifestacion</label>
                            <input type="text" class="form-control" id="manifestacion_pj" name="manifestacion_pj" placeholder="lamenta -- lamentan -- felicita -- felicitan">
                          </div>
                      </div>

                    </div>
                    </div>

                    <div class="container" id='beneficiario' style="border: solid;padding: 3%;margin-bottom: 3%;display:none">

                    <h2 class="titulo_beneficiario" style="text-align:center"></h2>


                    <div class="form-row">
                    <div class="col-md-6 form-group">
                    <div class="form-group">
                    <label for="dirigido">Dirigido a : </label>
                    <input required type="text" class="form-control" name="dirigido" id="dirigido" placeholder="">
                    </div>
                    </div>

                    <div class="col-md-6 form-group">
                    <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input required type="text" class="form-control" name="direccion_beneficiario" id="direccion_beneficiario" placeholder="">
                    </div>
                    </div>

                    <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="direccion">Municipio</label>
                        <input required type="text" class="form-control" name="municipio_beneficiario" id="municipio_beneficiario" placeholder="">
                      </div>
                    </div>

                    <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="direccion">Departamento</label>
                        <input required type="text" class="form-control" name="departamento_beneficiario" id="departamento_beneficiario" placeholder="">
                      </div>
                    </div>

                    <div class="col-md-6 form-group">
                    <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input  type="text" class="form-control" name="telefono_beneficiario" id="telefono_beneficiario" placeholder="">
                    </div>
                    </div>

                  
                    </div>

                    </div>


                    <div class="container" id='pago' style="border: solid;padding: 3%;margin-bottom: 3%;display:none">
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
                        <input  type="mail" class="form-control" name="correo_facturar" id="correo_facturar" placeholder="">
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
                      <select required class="form-control" id="medio_pago" name="medio_pago">
                        <option value=""></option>
                        <option value="Efectivo">Efectivo</option>
                        <option value="Nómina">Nómina</option>
                        <option value="Credito">Credito</option>
                      </select>
                    </div> 

                    <div class="form-group">
                    <label for="observaciones">Observaciones</label>
                    <textarea class="form-control" id="observaciones" name="observaciones" rows="3"></textarea>
                    </div>

                    <div class="row" id="seccion_credito" style="display:none">
                    <div class="col-md-5 form-group ">
                    <div class="form-group">
                      <label for="cuota 1">Valor Cuota 1</label>
                      <input  type="number" class="form-control credito" name="valor_1" id="cuota_1" placeholder="">
                    </div>
                    </div>

                    <div class="col-md-5 form-group ">
                    <div class="form-group">
                      <label for="cuota 1">Fecha Cuota 1</label>
                      <input  type="date" class="form-control credito" name="fecha_1" id="fecha_1" placeholder="">
                    </div>
                    </div>

                    <div class="col-md-2 form-group ">
                    <label for="forma de pago">Pago</label>
                    <select  class="form-control credito" id="pago_1" name="pago_1">
                      <option value="No">No</option>
                      <option value="Si">Si</option>
                    </select>
                    </div> 

                    <div class="col-md-5 form-group ">
                    <div class="form-group">
                      <label for="cuota 2">Valor Cuota 2</label>
                      <input  type="number" class="form-control credito" name="valor_2" id="cuota_2" placeholder="">
                    </div>
                    </div>

                    <div class="col-md-5 form-group ">
                    <div class="form-group">
                      <label for="cuota 1">Fecha Cuota 2</label>
                      <input  type="date" class="form-control credito" name="fecha_2" id="fecha_2" placeholder="">
                    </div>
                    </div>


                    <div class="col-md-2 form-group ">
                    <label for="forma de pago">Pago</label>
                    <select  class="form-control credito" id="pago_2" name="pago_2">
                      <option value="No">No</option>
                      <option value="Si">Si</option>
                    </select>
                    </div> 

                    </div>

                    </div>


                    <div class="col-sm-offset-2 col-sm-10">
                    <button style="display:none" type="submit" class="btn btn-primary" id="saveBtn" value="create">Guardar Información en el sistema
                    </button>
                    </div>
                </div> <!-- Fin formulario-->

               

        </form>

        </div>
  

      </div>
      
    </div>
  </div>