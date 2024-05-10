
  <!-- Modal -->
  <div class="modal fade" id="modal_editar_solicitud" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
    
    
        </div>
        <div class="modal-body">
      
        <form id="formulario_solicitud_edit" name="formulario_solicitud_edit" class="form-horizontal" enctype="multipart/form-data">


              <input type="hidden" id="solicitud_id" name="solicitud_id">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Solicitante</label>
                    <select class="form-control solicitante" id="solicitante" name="solicitante">
                      <option value="">Elija una opcion</option>
                      <option value="pn">Persona Natural</option>
                      <option value="pj">Persona Jurídica</option>
                    </select>
                </div> 

                <div class="container persona_natural" id='persona_natural' style="border: solid;padding: 3%;margin-bottom: 3%; display:none" >

                <h2 style="text-align:center">Datos del Solicitante Persona Natural</h2>

                  <div class="form-row">
                    <div class="col-md-6 form-group">
                      <div class="form-group">
                      <label for="nombre_apellido">Nombre(s) y Apellido(s)</label>
                      <input type="text" class="form-control nombre_apellido" name="nombre_apellido" id="nombre_apellido" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-6 form-group">
                    <div class="form-group">
                      <label for="trato_donante">Trato donante</label>
                      <input type="text" class="form-control trato_donante" name="trato_donante_pn" id="trato_donante_pn" placeholder="señor -- señora -- señores">
                    </div>
                  </div>

                  <div class="col-md-6 form-group">
                    <div class="form-group">
                      <label for="identificacion">Identificación</label>
                      <input type="text" class="form-control identificacion" name="identificacion" id="identificacion" placeholder="">
                    </div>
                  </div>

              

                  <div class="col-md-6 form-group">
                    <div class="form-group">
                      <label for="direccion">Dirección</label>
                      <input type="text" class="form-control direccion_pn" name="direccion_pn" id="direccion_pn" placeholder="">
                    </div>
                  </div>

                  <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="departamento">Departamento</label>
                        <input type="text" class="form-control departamento_pn" id="departamento_pn" name="departamento_pn" placeholder="">
                      </div>
                  </div>

                  <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="municipio">Municipio</label>
                        <input type="text" class="form-control municipio_pn" id="municipio_pn" name="municipio_pn" placeholder="">
                      </div>
                  </div>

                  <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control telefono_pn" name="telefono_pn" id="telefono_pn" placeholder="">
                      </div>
                  </div>

                  <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="correo electronico">Correo Electrónico</label>
                        <input type="email" class="form-control correo_pn" id="correo_pn" name="correo_pn" placeholder="name@example.com">
                      </div>
                  </div>

                  <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="motivo">Motivo</label>
                        <input type="text" class="form-control motivo_pn" id="motivo_pn" name="motivo_pn" placeholder="Cumpleaños,aniversario,grado ...">
                      </div>
                  </div>

                  <div class="col-md-6 form-group  quien">
                      <div class="form-group">
                        <label for="quien">Fallecido</label>
                        <input type="text" class="form-control quien_pn" id="quien_pn" name="quien_pn" placeholder="">
                      </div>
                  </div>

                  <div class="trato col-md-6 form-group">
                      <div class="form-group">
                        <label for="trato">Trato</label>
                        <input type="text" class="form-control trato_pn" id="trato" name="trato_pn" placeholder="del señor -- de la señora -- del Dr">
                      </div>
                  </div>

                  <div class="manifestacion col-md-6 form-group ">
                      <div class="form-group">
                        <label for="manifestacion">Manifestacion</label>
                        <input type="text" class="form-control manifestacion_pn" id="manifestacion" name="manifestacion_pn" placeholder="lamenta -- lamentan -- felicita -- felicitan">
                      </div>
                  </div>

              

              </div>
              </div>

              <div class="container persona_juridica" id='persona_juridica' style="border: solid;padding: 3%;margin-bottom: 3%; display:none">

              <h2 style="text-align:center">Datos del Solicitante Persona Jurídica</h2>

                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <div class="form-group">
                    <label for="nombre_apellido">Razón Social</label>
                    <input type="text" class="form-control razon_social" name="razon_social" id="razon_social" placeholder="">
                  </div>
                </div>

                <div class="col-md-6 form-group">
                    <div class="form-group">
                      <label for="trato_donante">Trato donante</label>
                      <input type="text" class="form-control trato_donante" name="trato_donante_pj" id="trato_donante_pj" placeholder="señor -- señora -- señores">
                    </div>
                  </div>

                <div class="col-md-6 form-group">
                    <div class="form-group">
                      <label for="identificacion">Nit</label>
                      <input type="text" class="form-control nit" name="nit" id="nit" placeholder="">
                    </div>
                </div>


                <div class="col-md-6 form-group">
                    <div class="form-group">
                      <label for="direccion">Dirección</label>
                      <input type="text" class="form-control direccion_pj" name="direccion_pj" id="direccion_pj" placeholder="">
                    </div>
                </div>

                <div class="col-md-6 form-group">
                    <div class="form-group">
                      <label for="telefono">Teléfono</label>
                      <input type="text" class="form-control telefono_pj" name="telefono_pj" id="telefono_pj" placeholder="">
                    </div>
                </div>

                <div class="col-md-6 form-group">
                    <div class="form-group">
                      <label for="correo electronico">Correo Electrónico</label>
                      <input type="email" class="form-control correo_pj" id="correo_pj" name="correo_pj" placeholder="name@example.com">
                    </div>
                </div>

                <div class="col-md-6 form-group">
                    <div class="form-group">
                      <label for="motivo">Motivo</label>
                      <input type="texto" class="form-control motivo_pj" id="motivo_pj" name="motivo_pj" placeholder="Cumpleaños,aniversario,grado ...">
                    </div>
                </div>

           

                  <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="departamento">Departamento</label>
                        <input type="text" class="form-control departamento_pj" id="departamento_pj" name="departamento_pj" placeholder="">
                      </div>
                  </div>

                  <div class="col-md-6 form-group">
                      <div class="form-group">
                        <label for="municipio">Municipio</label>
                        <input type="text" class="form-control municipio_pj" id="municipio_pj" name="municipio_pj" placeholder="">
                      </div>
                  </div>

                  <div class="col-md-6 form-group quien">
                      <div class="form-group">
                        <label for="quien">Fallecido</label>
                        <input type="text" class="form-control quien_pj" id="quien_pj" name="quien_pj" placeholder="">
                      </div>
                  </div>

                  <div class="trato col-md-6 form-group ">
                      <div class="form-group">
                        <label for="trato">Trato</label>
                        <input type="text" class="form-control trato_pj" id="trato" name="trato_pj" placeholder="del señor -- de la señora -- del Dr">
                      </div>
                  </div>

                  <div class="manifestacion col-md-6 form-group ">
                      <div class="form-group">
                        <label for="trato">Manifestacion</label>
                        <input type="text" class="form-control manifestacion_pj" id="manifestacion" name="manifestacion_pj" placeholder="lamenta -- lamentan -- felicita -- felicitan">
                      </div>
                  </div>
        </div>
        </div>

        <div class="container beneficiario" id='beneficiario' style="border: solid;padding: 3%;margin-bottom: 3%;display:none">

        <h2 style="text-align:center">Beneficiario(s)</h2>


        <div class="form-row">
            <div class="col-md-6 form-group">
                <div class="form-group">
                <label for="dirigido">Dirigido a : </label>
                <input required type="text" class="form-control dirigido" name="dirigido" id="dirigido" placeholder="">
              </div>
            </div>

            <div class="col-md-6 form-group">
                <div class="form-group">
                <label for="direccion">Dirección</label>
                <input required type="text" class="form-control direccion_beneficiario" name="direccion_beneficiario" id="direccion_beneficiario" placeholder="">
              </div>
            </div>

            <div class="col-md-6 form-group">
                <div class="form-group">
                <label for="direccion">Municipio</label>
                <input required type="text" class="form-control municipio_beneficiario" name="municipio_beneficiario" id="municipio_beneficiario" placeholder="">
              </div>
            </div>

            <div class="col-md-6 form-group">
                <div class="form-group">
                <label for="direccion">Departamento</label>
                <input required type="text" class="form-control departamento_beneficiario" name="departamento_beneficiario" id="departamento_beneficiario" placeholder="">
              </div>
            </div>

            <div class="col-md-6 form-group">
                <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input  type="text" class="form-control telefono_beneficiario" name="telefono_beneficiario" id="telefono_beneficiario" placeholder="">
              </div>
            </div>

      
        </div>

        </div>



        <div class="container pago" id='pago' style="border: solid;padding: 3%;margin-bottom: 3%;display:none">

          <h2 style="text-align:center">FACTURAR</h2>

            <div class="form-row">

                <div class="col-md-6 form-group">
                  <div class="form-group">
                  <label for="identificacion">Nit o Cedula</label>
                  <input  type="text" class="form-control identificacion_facturar" name="identificacion_facturar" id="identificacion_facturar" placeholder="">
                  </div>
                </div>

                <div class="col-md-6 form-group">
                  <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input  type="text" class="form-control nombre_facturar" name="nombre_facturar" id="nombre_facturar" placeholder="">
                  </div>
                </div>

                <div class="col-md-6 form-group">
                  <div class="form-group">
                  <label for="correo">Correo</label>
                  <input  type="mail" class="form-control correo_facturar" name="correo_facturar" id="correo_facturar" placeholder="">
                  </div>
                </div>

                <div class="col-md-6 form-group">
                  <div class="form-group">
                  <label for="direccion">Dirección</label>
                  <input  type="text" class="form-control direccion_facturar" name="direccion_facturar" id="direccion_facturar" placeholder="">
                  </div>
                </div>

                <div class="col-md-6 form-group">
                  <div class="form-group">
                  <label for="telefono">Teléfono</label>
                  <input  type="text" class="form-control telefono_facturar" name="telefono_facturar" id="telefono_facturar" placeholder="">
                  </div>
                </div>

                <div class="col-md-6 form-group">
                  <div class="form-group">
                  <label for="ciudad">Ciudad</label>
                  <input  type="text" class="form-control ciudad_facturar" name="ciudad_facturar" id="ciudad_facturar" placeholder="">
                  </div>
                </div>

            </div>


          <div class="form-group">
              <label for="forma de pago">Elija un medio de pago</label>
                <select required class="form-control medio_pago" id="medio_pago" name="medio_pago">
                  <option value=""></option>
                  <option value="Efectivo">Efectivo</option>
                  <option value="Nómina">Nómina</option>
                  <option value="Credito">Credito</option>
                  <option value="bancolombia">Bancolombia</option>
                  <option value="davivienda">Davivienda</option>
                  <option value="pse">Pse</option>
                </select>
          </div> 

          <div class="form-group">
            <label for="observaciones">Observaciones</label>
            <textarea class="form-control observaciones" id="observaciones" name="observaciones" rows="3"></textarea>
          </div>

     
          <input type="hidden" id="pago_1_id" name="pago_1_id">
          <div class="row" id="seccion_credito_edit" style="display:none">
            <div class="col-md-5 form-group ">
                <div class="form-group">
                  <label for="cuota 1">Valor Cuota 1</label>
                  <input  type="number" class="form-control credito_edit" name="valor_1" id="cuota_1_edit" placeholder="">
                </div>
            </div>

            <div class="col-md-5 form-group ">
                <div class="form-group">
                  <label for="cuota 1">Fecha Cuota 1</label>
                  <input  type="date" class="form-control credito_edit" name="fecha_1" id="fecha_1_edit" placeholder="">
                </div>
            </div>

            <div class="col-md-2 form-group ">
              <label for="forma de pago">Pago</label>
                <select  class="form-control credito_edit" id="pago_1_edit" name="pago_1_edit">
                  <option value="No">No</option>
                  <option value="Si">Si</option>
                </select>
            </div> 

            <input type="hidden" id="pago_2_id" name="pago_2_id">
            <div class="col-md-5 form-group ">
                <div class="form-group">
                  <label for="cuota 2">Valor Cuota 2</label>
                  <input  type="number" class="form-control credito_edit" name="valor_2" id="cuota_2_edit" placeholder="">
                </div>
            </div>

            <div class="col-md-5 form-group ">
                <div class="form-group">
                  <label for="cuota 1">Fecha Cuota 2</label>
                  <input  type="date" class="form-control credito_edit" name="fecha_2" id="fecha_2_edit" placeholder="">
                </div>
            </div>


            <div class="col-md-2 form-group ">
              <label for="forma de pago">Pago</label>
                <select  class="form-control credito_edit" id="pago_2_edit" name="pago_2_edit">
                  <option value="No">No</option>
                  <option value="Si">Si</option>
                </select>
            </div> 

          </div>
       
        </div>


        <div class="col-sm-offset-2 col-sm-10">
            <button style="display:none" type="submit" class="btn btn-primary saveBtn" id="saveBtn" value="create">Editar Información
            </button>
        </div>

        </form>

        </div>
    
      </div>
      
    </div>
  </div>