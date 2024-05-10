
  <!-- Modal -->
  <div class="modal fade" id="modal_usuario" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
    
    
        </div>
        <div class="modal-body">
      
        <form id="formulario_usuario" name="formulario_crear_seguimiento" class="form-horizontal" enctype="multipart/form-data">

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Correo</label>
                <input type="mail" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="clave">Clave</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="tipo_usuario">Tipo de usuario</label>
                <select class="form-control" id="tipo" name="tipo">
                    <option value="">Elija una opcion</option>
                    <option value="administrador">administrador</option>
                    <option value="funeraria">funeraria</option>
                    <option value="asesor">asesor</option>
                </select>
            </div>         
        
            <div class="col-sm-offset-2 col-sm-10">
                <button  type="submit" class="btn btn-primary saveBtn" id="saveBtn" value="create">Agregar Usuario
                </button>
            </div>

        </form>
        </div>
      </div>
    </div>
  </div>