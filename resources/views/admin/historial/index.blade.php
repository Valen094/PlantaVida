@extends('layouts.app')

@section('content')


<div class="container">

<div style="text-align: right;padding: 1%;">
    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title=" Contrato" class="edit btn btn-primary btn-sm AgregarSeguimiento">Registrar Seguimiento</a>
</div>

<h1 style="text-align: center;">Historial</h1>
<hr>
@include('admin.historial.tabla_historial')

</div>

@include('admin.modales.modal_crear_seguimiento')
@include('admin.modales.modal_editar_seguimiento')

@endsection

@section('js')
<script>

    $(document).ready(function() {
            
      $('#example').dataTable( {
        "scrollX": true,
        "responsive": true
      } );

    } );

    // Boton para agregar un nuevo contrato
    $('body').on('click', '.AgregarSeguimiento', function () {
        $('#modal_crear_seguimiento').modal('show');   
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //FORMULARIO DE CREACION DE SEGUIMIENTOS
    $("#formulario_crear_seguimiento").submit(function(e) {
      e.preventDefault();

      var formData = new FormData(document.getElementById("formulario_crear_seguimiento"));
        
        $.ajax({
            url: "{{route('historial.store')}}",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            destroy: true,
            success: function (data) {
              
              alert("Se ha creado el seguimiento de forma correcta");
              $('#formulario_crear_seguimiento').trigger("reset");
              $('#modal_crear_seguimiento').modal('hide');
              dibujarTabla(data) 
            },
            error: function (data) {
            alert('Existen campos vacios que no permite en envio del formulario');
            }
        });

    });

    //ACTUALIZAR SOLICITUD 
    $("#formulario_editar_seguimiento").submit(function(e) {
      e.preventDefault();

      var formData = new FormData(document.getElementById("formulario_editar_seguimiento"));

      $.ajax({
          url: "{{route('actualizar_seguimiento')}}",
          type: "post",
          dataType: "html",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          destroy: true,
          success: function (data) {
              $('#formulario_editar_seguimiento').trigger("reset");
              $('#modal_editar_seguimiento').modal('hide');
              alert('Se ha realizado la actualizacion de forma correcta');
              dibujarTabla(data);
          },
          error: function (data) {
          alert('Existen campos vacios que no permite en envio del formulario');
          }
      });
        
    });


    $('body').on('click', '.editar', function () {
        var seguimiento_id = $(this).data("id");

        $('#formulario_editar_seguimiento').trigger("reset");
        $('#modal_editar_seguimiento').modal('show');
       
        var url = "{{ route('historial.index') }}" +'/' + seguimiento_id + '/edit';

        $('#imagen_actual').html('');
        $.get( url, function( data ) {

          $('#fecha_edit').val(data.fecha);
          $('#historial_id').val(data.id);
          $('#imagen_actual').append(`<h3 style="text-align:center">Imagen Actual</h3> <br><img style="width: 30%;display: block;margin: auto;" class="box" src="{{ asset('storage/seguimiento/miniatura/`+data.imagen+`') }}" alt="imagen_actual" title="">`);


        });

    });



    // ACCION DESDE EL BOTON ELIMINAR DESDE LA TABLA 
    $('body').on('click','.eliminar',function(){
      var seguimiento_id = $(this).data("id");
      var url = "{{route('historial.index')}}"+"/"+seguimiento_id;
      var result = confirm('Esta seguro de Eliminar esta solicitud !');

      if(result){
        $.ajax({
          type: "DELETE",
          url: url,
          success: function(data){
            alert('Se elimino la solicitud de forma correcta');
            dibujarTabla(data);
          },
          error: function(data){
              alert("Error : "+data);
          }
        });
      }
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


