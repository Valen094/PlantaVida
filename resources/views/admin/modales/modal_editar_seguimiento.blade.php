
  <!-- Modal -->
  <div class="modal fade" id="modal_editar_seguimiento" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
    
    
        </div>
        <div class="modal-body">
      
        <form id="formulario_editar_seguimiento" name="formulario_crear_seguimiento" class="form-horizontal" enctype="multipart/form-data">

            <input type="hidden" id="historial_id" name="seguimiento_id">

            <div class="form-group">
                <label for="Fecha">Fecha</label>
                <input type="date" class="form-control" id="fecha_edit" name="fecha">
            </div>


          <div id="imagen_actual"> </div>

            <div class="form-group">
                <label for="Fecha">Foto</label>
                <input type="file" class="form-control" id="imagen" name="imagen">
            </div>

            <div class="col-sm-offset-2 col-sm-10">
                <button  type="submit" class="btn btn-primary saveBtn" id="saveBtn" value="create">Actualizar Seguimiento
                </button>
            </div>

        </form>

        </div>
    
      </div>
      
    </div>
  </div>