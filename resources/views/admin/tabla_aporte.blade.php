<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Acciones</th>
                <th>Estado</th>
                <th>Arbol</th>
                <th>Pago</th>
                <th>Gestión</th>
                <th>nombre</th>
                <th>Cantidad arboles</th>
                <th>Fecha expedicion</th>
                <th>Motivo</th>
                <th>Identificación</th>
                <th>Direccion</th>
                <th>Departamento</th>
                <th>Municipio</th>
                <th>Telefono</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
        @foreach($solicitudes as $solicitud)


            <?php $color = ""; ?>

            @if($solicitud->estado == 'En proceso')
                <?php $color = "#f5d782"; ?>

            @elseif($solicitud->estado == '')
                <?php $color = "#ffffff"; ?>

            @elseif($solicitud->estado == 'Finalizado' && $solicitud->pago_verificado == 'Si')

                <?php $color = "#a2ed98"; ?>
                
            @elseif($solicitud->estado == 'Finalizado' && ($solicitud->pago_verificado == 'No' || $solicitud->pago_verificado == 'vacio' ))

                <?php $color = "#f3bcbc"; ?>

            @else

            @endif

            <tr style="background : {{$color}}" id="pintar_estado_{{$solicitud->id}}">


                <td>{{$solicitud->id}}</td>


                <td>
                    
                    <a href="javascript:void(0)" data-toggle="tooltip"  data-id="{{$solicitud->id}}" data-original-title="Edit" class=" btn btn-info btn-sm editar">Editar</a>
            
                    <!--<a href="javascript:void(0)" data-toggle="tooltip"  data-id="{{$solicitud->id}}" data-original-title="Eliminar" class=" btn btn-danger btn-sm eliminar">Eliminar</a> -->

                    <a href="{{ route('ver_certificado',$solicitud->id)}}" data-toggle="tooltip"  data-id="{{$solicitud->id}}" data-original-title="Bono" class=" btn btn-success btn-sm pdf_bono">Certificado</a>

                    <a href="{{ route('ver_historial',$solicitud->id)}}" data-toggle="tooltip"  data-id="{{$solicitud->id}}" data-original-title="Bono" class=" btn btn-primary btn-sm ">Ver Historial</a>
            
                </td>

                <td>
                  <select onchange="getEstado(this);" size="1" id="{{$solicitud->id}}" name="estado">

                    @if($solicitud->estado == 'vacio')
                    <option selected value='vacio' ></option>
                    @else 
                    <option value='vacio'></option>
                    @endif
              
                    @if($solicitud->estado == 'En proceso')
                    <option selected value="En proceso" >En proceso</option>
                    @else 
                    <option value="En proceso" >En proceso</option>
                    @endif

                    @if($solicitud->estado == 'Finalizado')
                    <option selected value="Finalizado" >Finalizado</option>
                    @else 
                    <option value="Finalizado" >Finalizado</option>
                    @endif

                  </select>
                </td>

            
                <td>
                <select onchange="getArbol(this);" size="1">
                    <option selected value="NA,{{$solicitud->id}}" >Elija un arbol</option>
                    @foreach($arboles as $arbol)

                        @if(isset($solicitud->arbol->titulo))
                            @if($solicitud->arbol->titulo == $arbol->titulo)
                            <option  selected value="{{$arbol->id}},{{$solicitud->id}}" >{{$arbol->titulo}}</option>
                            @else
                            <option  value="{{$arbol->id}},{{$solicitud->id}}" >{{$arbol->titulo}}</option>
                            @endif
                        @else
                            <option  value="{{$arbol->id}},{{$solicitud->id}}" >{{$arbol->titulo}}</option>
                        @endif

                    @endforeach
                </select>
                </td>

                <td>
                  <select onchange="getval(this);" size="1" id="{{$solicitud->id}}" name="verificar_pago">

                    @if($solicitud->pago_verificado == ' ')
                    <option selected value="vacio" ></option>
                    @else 
                    <option value="vacio"></option>
                    @endif
              
                    @if($solicitud->pago_verificado == 'Si')
                    <option selected value="Si" >Si</option>
                    @else 
                    <option value="Si" >Si</option>
                    @endif

                    @if($solicitud->pago_verificado == 'No')
                    <option selected value="No" >No</option>
                    @else 
                    <option value="No" >No</option>
                    @endif

                  </select>
                </td>

                
                @if($solicitud->usuario['name'])
                <td>{{$solicitud->usuario['name']}}</td>
                @else
                <td>Web</td>
                @endif


                <td>{{$solicitud->nombre_apellido}}</td>
                <td>{{$solicitud->cantidad_arboles}}</td>
                <td>{{$solicitud->fecha_expedicion}}</td>
                <td>{{$solicitud->motivo}}</td>
                <td>{{$solicitud->identificacion}}</td>
                <td>{{$solicitud->direccion}}</td>
                <td>{{$solicitud->departamento}}</td>
                <td>{{$solicitud->municipio}}</td>
                <td>{{$solicitud->telefono}}</td>
                <td>{{$solicitud->correo_electronico}}</td>


            </tr>
        @endforeach
        </tbody>
 
    </table>