@extends('layouts.app')

@section('content')


<div class="container">

<div style="text-align: right;padding: 1%;">
    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title=" Contrato" class="edit btn btn-primary btn-sm bonoCondolencias">Bono Condolencias</a>

    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title=" Contrato" class="edit btn btn-danger btn-sm bonoFelicitaciones">Bono Felicitaciones</a>

    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title=" Contrato" class="edit btn btn-success btn-sm bonoConmemoracion">Bono Conmemoracion</a>
    <!--<a href="javascript:void(0)" data-toggle="tooltip" data-original-title=" Contrato" class="edit btn btn-success btn-sm bonoLanzamiento">Bono de Lanzamiento</a>-->

</div>

<h1 style="text-align: center;">Solicitudes</h1>
@include('flash::message')
<hr>
@include('admin.tabla_solicitudes')

</div>

@include('admin.modales.modal_crear_registro')
@include('admin.modales.modal_editar_solicitud')

@endsection

@section('js')
<script>


  var tipo_bono = "";


  /* Funcion para saber el estado de la solicitud */
  function getEstado(dato){

    var url = "{{ route('index')}}"+"/admin/estado_solicitud/"+dato.id+"/"+dato.value;

    console.log(url);
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

    $(document).ready(function() {
            
      $('#example').dataTable({
        "scrollX": true,
        "responsive": true,
        "order": [[ 2, "desc" ]],
        lengthMenu: [[5,10,20, -1],[5,10,50,"Mostrar Todo"]]
      });

    });

    // Boton para agregar un nuevo contrato
    $('body').on('click', '.bonoCondolencias', function () {

        $('#formulario').hide();
        $('.quien').show();
        $('.trato').show();
        $('.motivo').hide();
        $('#modal_bono').modal('show');   
        $('#solicitante').val("");
        $('#solicitante').prop('selectedIndex',0);
        $('#formulario_solicitud').trigger("reset");
        $('#titulo_bono').html('BONO DE CONDOLENCIAS');
        tipo_bono = "Condolencias";
        $('#tipo_bono').val(tipo_bono);

    });


    // BONO DE CONMEMORACION 
    $('body').on('click', '.bonoConmemoracion', function () {

      // Mostrar el modal con las opciones
      $('#modal_bono').modal('show');   

      $('#solicitante').val("");
      $('#formulario_solicitud').trigger("reset");
      $('.motivo').hide();
      tipo_bono = "Conmemoracion";
      $('#tipo_bono').val(tipo_bono);

      $('#beneficiario').hide();
      /**  PARA EL BONO DE CONMEMORACION NO SE TIENE EN CUENTA LOS DATOS DEL DOLIENTE 
      POR LO TANTO SE DEBEN COLOCAR COMO NO REQUERIDOS PARA PODER ENVIAR EL FORMULARIO*/
      $("#dirigido").prop('required', false);
      $("#direccion_beneficiario").prop('required', false);
      $("#municipio_beneficiario").prop('required', false);
      $("#departamento_beneficiario").prop('required', false);
      
    
    });
    

    $('body').on('click', '.bonoFelicitaciones', function () {

        $('#formulario').hide();
        $('.quien').hide();
        $('.trato').hide();
        $('#modal_bono').modal('show');   
        $('#solicitante').val("");
        $('#formulario_solicitud').trigger("reset");
        $('#titulo_bono').html('BONO DE FELICITACIONES');
        tipo_bono = "Felicitaciones";
        $('#tipo_bono').val(tipo_bono);
    });

    $('body').on('click', '.bonoLanzamiento', function () {

        $.get("{{route('bono_lanzamiento')}}", function(data) {
          
            alert('Se envio la información de forma exitosa'); 
            dibujarTabla(data);
            
        });

    });

    

    

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $(document).on('change', '.solicitante', function(event) {

        var elemento = $(".solicitante option:selected").val();
        mostrarElementos(elemento);

    });


      // ACCION DESDE EL BOTON ELIMINAR DESDE LA TABLA 
      $('body').on('click','.eliminar',function(){
          var solicitud_id = $(this).data("id");
          var url = "{{route('solicitud.index')}}"+"/"+solicitud_id;
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


   // se verifica si es credito o contado en la parte de edicion
   $(document).on('change', '.medio_pago', function(event) {

      var medio = $(".medio_pago option:selected").val();

      if(medio == 'Credito'){
        $('.credito_edit').prop('required',true);
        $('#seccion_credito_edit').show();
        }else{
        $('.credito_edit').prop('required',false);
        $('#seccion_credito_edit').hide();
        }

    });



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


    $(document).on('change', '#medio_pago_edit', function(event) {

      var medio = $("#medio_pago_edit option:selected").val();

      if(medio == 'Credito'){
        $('.credito_edit').prop('required',true);
        $('#seccion_credito_edit').show();
      }else{
        $('.credito_edit').prop('required',false);
        $('#seccion_credito_edit').hide();
      }

    });


    // INSTRUCCIONES PARA IDENTIFICAR EL TIPO DE SOLICITANTE
    $(document).on('change', '#solicitante', function(event) {
   
        if($("#solicitante option:selected").val() == 'pn'){

            $('#formulario').show();
            $('#persona_natural').show();
            $('#beneficiario').show();
            $('#pago').show();
            $('#politicas').show();
            $('#persona_juridica').hide();
            $('#saveBtn').show();

            $("#nombre_apellido").prop('required', true);
            $("#identificacion").prop('required', true);
            $("#direccion_pn").prop('required', true);
            $("#telefono_pn").prop('required', true);
      

            $("#razon_social").prop('required', false);
            $("#nit").prop('required', false);
            $("#direccion_pj").prop('required', false);
            $("#telefono_pj").prop('required', false);
            $("#correo_pj").prop('required', false);


            if(tipo_bono == "Condolencias"){
              $('#motivo_pn').val('Condolencias');
              $('#motivo_pn').prop('readonly', true);
              $('.titulo_beneficiario').html('DOLIENTE');
            }else{
              $('.titulo_beneficiario').html('BENEFICIARIO');
            }
        }

        if($("#solicitante option:selected").val() == 'pj'){

            $('#formulario').show();
            $('#persona_juridica').show();
            $('#beneficiario').show();
            $('#politicas').show();
            $('#pago').show();
            $('#persona_natural').hide();
            $('#saveBtn').show();

            $("#nombre_apellido").prop('required', false);
            $("#identificacion").prop('required', false);
            $("#direccion_pn").prop('required', false);
            $("#telefono_pn").prop('required', false);
            $("#correo_pn").prop('required', false);
  

            $("#razon_social").prop('required', true);
            $("#nit").prop('required', true);
            $("#direccion_pj").prop('required', true);
            $("#telefono_pj").prop('required', true);
            $("#correo_pj").prop('required', true);
  

            if(tipo_bono == "Condolencias"){

                $('.titulo_beneficiario').html('DOLIENTE');

            }else{
              $('.titulo_beneficiario').html('BENEFICIARIO');
            }
        }

      
        if($("#solicitante option:selected").val() == ''){

            $('#persona_juridica').hide();
            $('#beneficiario').hide();
            $('#persona_natural').hide();
            $('#politicas').hide();
            $('#pago').hide();
        }


          if(tipo_bono == "Conmemoracion"){

              $('#beneficiario').hide();
              /**  PARA EL BONO DE CONMEMORACION NO SE TIENE EN CUENTA LOS DATOS DEL DOLIENTE 
              POR LO TANTO SE DEBEN COLOCAR COMO NO REQUERIDOS PARA PODER ENVIAR EL FORMULARIO*/
              $("#dirigido").prop('required', false);
              $("#direccion_beneficiario").prop('required', false);
              $("#municipio_beneficiario").prop('required', false);
              $("#departamento_beneficiario").prop('required', false);
          }

    });


    //FORMULARIO DE CREACION DE SOLICITUDES
    $("#formulario_solicitud").submit(function(e) {
      e.preventDefault();

      var formData = new FormData(document.getElementById("formulario_solicitud"));
        
        $.ajax({
            url: "{{route('solicitud.store')}}",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            destroy: true,
            success: function (data) {
              
                $('#modal_bono').modal('hide');  
                $('#formulario_solicitud').trigger("reset");
                alert('Se envio la información de forma exitosa');
            
                dibujarTabla(data)
                
            },
            error: function (data) {
            alert('Existen campos vacios que no permite en envio del formulario');
            }
        });

    });

    //ACTUALIZAR SOLICITUD 
    $("#formulario_solicitud_edit").submit(function(e) {
      e.preventDefault();

      var formData = new FormData(document.getElementById("formulario_solicitud_edit"));

      $.ajax({
          url: "{{route('actualizar_solicitud')}}",
          type: "post",
          dataType: "html",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          destroy: true,
          success: function (data) {
              $('#formulario_solicitud_edit').trigger("reset");
              $('#modal_editar_solicitud').modal('hide');
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
        "responsive": true,
        "order": [[ 2, "desc" ]]
      } );
      $('#example').DataTable().draw();
    }

    $(document).ready(function(){
      $('body').on('click', '.bono', function(){
        var id = $(this).attr('id');
    
        console.log(solicitante);
        $('#formulario_solicitud').trigger("reset");
        $('#persona_juridica').hide();
        $('#beneficiario').hide();
        $('#persona_natural').hide();
        $('#politicas').hide();
        $('#pago').hide();

        $(document).on('change', '#solicitante', function(event) {

          var solicitante = $("#solicitante option:selected").val()

          if(id == 'condolencias' && solicitante == 'pn'){
          
            $('#motivo_pn').val('Condolencias');
            $('#motivo_pn').attr('readonly', true);
          }

          if(id == 'condolencias' && solicitante == 'pj'){
            
            $('#motivo_pj').val('Condolencias');
            $('#motivo_pj').attr('readonly', true);
          }

          if(id == 'celebracion'){
            $('#motivo_pj').val('');
            $('#motivo_pn').val('');

            $('#motivo_pj').attr('readonly', false);
            $('#motivo_pn').attr('readonly', false);
          }

        });

        $('#modal_bono').modal('show');   
      })
    })


    $(document).on('change', '#medio_pago', function(event) {

        var forma_pago = $("#medio_pago option:selected").val();

        if(forma_pago == 'pse'){
          $('#pago_pse').show();
        }else{
          $('#pago_pse').hide();
        }

    });


    // EDICION DEL BONO FELICITACIONES O CONDOLENCIAS
    $('body').on('click', '.editar', function () {
        var solicitud_id = $(this).data("id");

        $('#formulario_solicitud_edit').trigger("reset");
        $('#modal_editar_solicitud').modal('show');
        $('#solicitud_id').val(solicitud_id);

       

        var url = "{{ route('solicitud.index') }}" +'/' + solicitud_id + '/edit';

        $.get( url, function( data ) {

       
            $('.solicitante').val(data[0].solicitante);
            
            mostrarElementos(data[0])

            if(data[0].quien == null){
              $('.quien').hide();
              $('.trato').hide();
            }else{
              $('.quien').show();
              $('.trato').show();
            }
           
           // SE CARGA LA INFORMACION EN CADA FORMULARIO
            if(data[0].solicitante == 'pn'){
              $('.nombre_apellido').val(data[0].nombre_apellido);
              $('.identificacion').val(data[0].identificacion);
              $('.direccion_pn').val(data[0].direccion);
              $('.telefono_pn').val(data[0].telefono);
              $('.correo_pn').val(data[0].correo_electronico);
              $('.motivo_pn').val(data[0].motivo);
              $('.quien_pn').val(data[0].quien);
              $('.departamento_pn').val(data[0].departamento);
              $('.municipio_pn').val(data[0].municipio);
              $('.dirigido').val(data[0].dirigido);
              $('.trato_pn').val(data[0].trato);
              $('.manifestacion_pn').val(data[0].manifestacion);

            }

            if(data[0].solicitante == 'pj'){
              $('.razon_social').val(data[0].razon_social);
              $('.nit').val(data[0].nit);
              $('.direccion_pj').val(data[0].direccion);
              $('.telefono_pj').val(data[0].telefono);
              $('.correo_pj').val(data[0].correo_electronico);
              $('.motivo_pj').val(data[0].motivo);
              $('.quien_pj').val(data[0].quien);
              $('.departamento_pj').val(data[0].departamento);
              $('.municipio_pj').val(data[0].municipio);
              $('.dirigido').val(data[0].dirigido);
              $('.trato_pj').val(data[0].trato);
              $('.manifestacion_pj').val(data[0].manifestacion);


            }

       

            $('.direccion_beneficiario').val(data[0].direccion_beneficiario);
            $('.municipio_beneficiario').val(data[0].municipio_beneficiario);
            $('.departamento_beneficiario').val(data[0].departamento_beneficiario);
            $('.telefono_beneficiario').val(data[0].telefono_beneficiario);
            $('.correo_beneficiario').val(data[0].correo_beneficiario);
    

            $('.identificacion_facturar').val(data[0].identificacion_facturar);
            $('.nombre_facturar').val(data[0].nombre_facturar);
            $('.correo_facturar').val(data[0].correo_facturar);
            $('.direccion_facturar').val(data[0].direccion_facturar);
            $('.telefono_facturar').val(data[0].telefono_facturar);
            $('.ciudad_facturar').val(data[0].ciudad_facturar);
            $('.trato_donante').val(data[0].trato_donante);

            $('.medio_pago').val(data[0].medio_pago);
            $('.observaciones').val(data[0].observaciones);

            if(data[0].medio_pago == 'Credito'){
              $('.credito_edit').prop('required',true);
              $('#seccion_credito_edit').show();
            }else{
              $('.credito_edit').prop('required',false);
              $('#seccion_credito_edit').hide();
            }

        });

      });


    // FUNCION PARA DECIDIR QUE SE MUESTRA Y QUE SE OCULTA
    function mostrarElementos(elemento){

        console.log(elemento.motivo);

        if(elemento.solicitante == 'pn'){

   

            $('.persona_natural').show();
            $('.beneficiario').show();
            $('.pago').show();
            $('.politicas').show();
            $('.persona_juridica').hide();
            $('.saveBtn').show();

            $(".nombre_apellido").prop('required', true);
            $(".identificacion").prop('required', true);
            $(".direccion_pn").prop('required', true);
            $(".telefono_pn").prop('required', true);
            /**$(".correo_pn").prop('required', true);*/
            $(".motivo_pn").prop('required', true);

            $(".razon_social").prop('required', false);
            $(".nit").prop('required', false);
            $(".direccion_pj").prop('required', false);
            $(".telefono_pj").prop('required', false);
            $(".correo_pj").prop('required', false);
            $(".motivo_pj").prop('required', false);

          if(elemento.motivo == "Bono memoria")
          {
            $('.beneficiario').hide();
            $(".dirigido").prop('required', false);
            $(".direccion_beneficiario").prop('required', false);
            $(".municipio_beneficiario").prop('required', false);
            $(".departamento_beneficiario").prop('required', false);
          }
     
        
      }

      if(elemento.solicitante == 'pj'){

        if(elemento.motivo != "Bono memoria"){
        $('.persona_juridica').show();
        $('.beneficiario').show();
        $('.politicas').show();
        $('.pago').show();
        $('.persona_natural').hide();
        $('.saveBtn').show();

        $(".nombre_apellido").prop('required', false);
        $(".identificacion").prop('required', false);
        $(".direccion_pn").prop('required', false);
        $(".telefono_pn").prop('required', false);
        $(".correo_pn").prop('required', false);
        $(".motivo_pn").prop('required', false);

        $(".razon_social").prop('required', true);
        $(".nit").prop('required', true);
        $(".direccion_pj").prop('required', true);
        $(".telefono_pj").prop('required', true);
        $(".correo_pj").prop('required', true);
        $(".motivo_pj").prop('required', true);
      }

      if(elemento.solicitante == ''){
        $('.persona_juridica').hide();
        $('.beneficiario').hide();
        $('.persona_natural').hide();
        $('.politicas').hide();
        $('.pago').hide();
      }
      }

      if(elemento.motivo == "Bono memoria"){
        $('.beneficiario').hide();
        $("#dirigido").prop('required', false);
        $("#direccion_beneficiario").prop('required', false);
        $("#municipio_beneficiario").prop('required', false);
        $("#departamento_beneficiario").prop('required', false);
      }


    }

</script>

@endsection


