@extends('layouts.app')

@section('content')


<div class="container">

<div style="text-align: right;padding: 1%;">
    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title=" Contrato" class="edit btn btn-primary btn-sm AgregarUsuario">Registra Usuario</a>
</div>

<h1 style="text-align: center;">Usuarios del Sistema</h1>
@include('flash::message')
<hr>
@include('admin.usuarios.tabla_usuarios')

</div>

@include('admin.modales.modal_crear_usuario')
@include('admin.modales.modal_editar_usuario')

@endsection
@section('js')
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {        
            $('#example').dataTable( {
            "scrollX": true,
            "responsive": true
            });
        } );

        // Boton para agregar un nuevo contrato
        $('body').on('click', '.AgregarUsuario', function () {
            $('#modal_usuario').modal('show');   
        });

    //FORMULARIO DE CREACION DE USUARIOS
    $("#formulario_usuario").submit(function(e) {
      e.preventDefault();

      var formData = new FormData(document.getElementById("formulario_usuario"));
        
        $.ajax({
            url: "{{route('usuarios.store')}}",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            destroy: true,
            success: function (data) {
                $('#modal_usuario').modal('hide');  
                $('#formulario_usuario').trigger("reset");
                alert('Se envio la información de forma exitosa');
                dibujarTabla(data)
            },
            error: function (data) {
                alert('Existen campos vacios que no permite en envio del formulario');
            }
        });

    });


      // ACCION DESDE EL BOTON ELIMINAR DESDE LA TABLA 
      $('body').on('click','.eliminar',function(){
          var usuario_id = $(this).data("id");
          var url = "{{route('usuarios.index')}}"+"/"+usuario_id;
          var result = confirm('Esta seguro de Eliminar este Usuario !');

            if(result){
            $.ajax({
                type: "DELETE",
                url: url,
                success: function(data){
                alert('Se elimino el usuario de forma correcta');
                dibujarTabla(data);
                },
                error: function(data){
                    alert("Error : "+data);
                }
            });
            }

      });


          // ACCION DEL BOTON EDITAR DESDE LA TABLA 
    $('body').on('click', '.editar', function () {
        var usuario_id = $(this).data("id");

        $('#formulario_editar_usuario').trigger("reset");
        $('#modal_editar_usuario').modal('show');
        $('#usuario_id').val(usuario_id);

        var url = "{{ route('usuarios.index') }}" +'/' + usuario_id + '/edit';

        $.get( url, function( data ) {

            $('#usuario_id').val(data.id);
            $('#editar_name').val(data.name);
            $('#editar_email').val(data.email);
            $('#editar_tipo').val(data.tipo);
            $('#clave').val("");

        });

      });


          //ACTUALIZAR SOLICITUD 
    $("#formulario_editar_usuario").submit(function(e) {
      e.preventDefault();

      var formData = new FormData(document.getElementById("formulario_editar_usuario"));

      $.ajax({
          url: "{{route('actualizar_usuario')}}",
          type: "post",
          dataType: "html",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          destroy: true,
          success: function (data) {
              $('#formulario_editar_usuario').trigger("reset");
              $('#modal_editar_usuario').modal('hide');
              alert('Se ha realizado la actualizacion de forma correcta');
              dibujarTabla(data);
          },
          error: function (data) {
          alert('Existen campos vacios que no permite en envio del formulario');
          }
      });
        
    });



    function dibujarTabla(data){
        $('#example').DataTable().destroy();
        $('#example').html(data);
        $('#example').dataTable( {
        "scrollX": true,
        "responsive": true
        } );
        $('#example').DataTable().draw();
    }
        
    </script>
@endsection


