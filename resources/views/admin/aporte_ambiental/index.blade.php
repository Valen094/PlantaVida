@extends('layouts.app')

@section('content')


<div class="container">

<div style="text-align: right;padding: 1%;">
    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title=" Contrato" class="edit btn btn-success btn-sm bonoAporteAmbiental">Bono Donacion</a>
</div>

<h1 style="text-align: center;">Bono aporte ambiental</h1>
@include('flash::message')
<hr>
@include('admin.tabla_aporte')

</div>

@include('admin.modales.bono_aporte_ambiental')

@endsection

@section('js')
<script>

$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
            
      $('#example').dataTable({
        "scrollX": true,
        "responsive": true,
        lengthMenu: [[5,10,20, -1],[5,10,50,"Mostrar Todo"]],
        "order": [[ 0, "desc" ]]
      });

    });


    /** PARA EDITAR Y CREAR BONOS DE APORTE AMBIENTAL */
    $("#formulario_aporte_ambiental").submit(function(e) {
      e.preventDefault();

      var formData = new FormData(document.getElementById("formulario_aporte_ambiental"));
      var accion = $('#tipo').val();

        if(accion == 'crear'){
          var ruta = "{{route('aporte.store')}}";
        }else{
          var ruta = "{{route('actualizar_bono_aporte')}}";
        }

        $.ajax({
          url: ruta,
          type: "post",
          dataType: "html",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          destroy: true,
          success: function (data) {
            
              $('#modal_bono_aporteAmbiental').modal('hide');  
              $('#formulario_aporte_ambiental').trigger("reset");
              alert('Se envio la información de forma exitosa');
          
              dibujarTabla(data)
              
          },
          error: function (data) {
          alert('Existen campos vacios que no permite en envio del formulario');
          }
      });

      
    });


  
    $('body').on('click', '.bonoAporteAmbiental', function () {
      $("#tipo").val("crear"); 
        $('#modal_bono_aporteAmbiental').modal('show');   

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

   // se verifica si es credito o contado
   $(document).on('change', '#medio_pago', function(event) {

    var medio = $("#medio_pago option:selected").val();

    if(medio == 'Credito'){
      $('.credito').prop('required',true);
      $('#seccion_credito').show();
    }else{
      $('.credito').prop('required',false);
      $('#seccion_credito').hide();
    }

    });


    // ACCION DEL BOTON EDITAR DESDE LA TABLA 
    $('body').on('click', '.editar', function () {

      var solicitud_id = $(this).data("id");

      var url = "{{ route('solicitud.index') }}" +'/' + solicitud_id + '/edit';

      $("#tipo").val("editar"); 

      $.get( url, function( data ) {

        console.log(data);

        $('#modal_bono_aporteAmbiental').modal('show');  
        $('#solicitud_id').val(data[0].id);
        $('#nombre_apellido').val(data[0].nombre_apellido);
        $('#identificacion').val(data[0].identificacion);
        $('#direccion').val(data[0].direccion);
        $('#departamento').val(data[0].departamento);
        $('#municipio').val(data[0].municipio);
        $('#telefono').val(data[0].telefono);
        $('#fecha_expedicion').val(data[0].fecha_expedicion);
        $('#cantidad_arboles').val(data[0].cantidad_arboles);
        $('#medio_pago').val(data[0].medio_pago);
        $('#observaciones').val(data[0].observaciones);
        $('#correo_electronico').val(data[0].correo_electronico);

        $('#identificacion_facturar').val(data[0].identificacion_facturar);
        $('#nombre_facturar').val(data[0].nombre_facturar);
        $('#correo_facturar').val(data[0].correo_facturar);
        $('#direccion_facturar').val(data[0].direccion_facturar);
        $('#telefono_facturar').val(data[0].telefono_facturar);
        $('#ciudad_facturar').val(data[0].ciudad_facturar);




        
      }); 
     
    });


      // PENDIENTE TERMINAR PARA QUE PUEDA ELIMINAR EN APORTE AMBIENTAL
      $('body').on('click','.eliminar',function(){
          var solicitud_id = $(this).data("id");
          var url = "{{route('aporte.index')}}"+"/"+solicitud_id;
          var result = confirm('Esta seguro de Eliminar esta solicitud del bono aporte!');

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

      /* Funcion para saber el estado de la solicitud */
      function getEstado(dato){

      var url = "{{ route('index')}}"+"/admin/estado_solicitud/"+dato.id+"/"+dato.value;

      $.get(url, function(data){

          if(data.estado == 'En proceso'){
            $('#pintar_estado_'+dato.id).css('background', '#f5d782');
          }

          if(data.estado == 'Finalizado' && data.pago_verificado == 'Si'){

            console.log('entra aqui finalizado si');
            $('#pintar_estado_'+dato.id).css('background', '#a2ed98');
          }

          if(data.estado == 'Finalizado' && (data.pago_verificado == 'No' || data.pago_verificado == 'vacio')){
            $('#pintar_estado_'+dato.id).css('background', '#f3bcbc');
          }
          

          if(data.estado == 'vacio'){
            $('#pintar_estado_'+dato.id).css('background', '#ffffff');
          }

      });

      }


      function getval(dato)
      {

      var url = "{{ route('index')}}"+"/admin/pago_verificado/"+dato.id+"/"+dato.value;
      console.log(url);
      $.get(url, function(data){

        if(data.estado == 'Finalizado' && dato.value == 'Si'){
          $('#pintar_estado_'+dato.id).css('background', '#a2ed98');
        }

        if(data.estado == 'Finalizado' &&  (dato.value == 'No' || dato.value == 'vacio')){
          $('#pintar_estado_'+dato.id).css('background', '#f3bcbc');
        }



      });

      }

      function getArbol(dato)
      {
          var url = "{{ route('index')}}"+"/admin/agregar_arbol/"+dato.value;
            console.log(url);
            $('.alert-danger').hide();
            $.get(url, function(data){
                alert(data);
            });
      }



</script>

@endsection


