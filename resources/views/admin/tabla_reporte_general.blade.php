<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Elegir arbol</th>
                <th>Arbol</th>
                <th>Pago</th>
                <th>Gestión</th>
                <th>nombre</th>
                <th>Facturar</th>
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

                <?php
                setlocale(LC_TIME, "spanish");
                $mi_fecha = $solicitud->fecha_expedicion;
                $mi_fecha = str_replace("/", "-", $solicitud->created_at);			
                $mes = date("d-m-Y", strtotime($mi_fecha));		
                $Dia = date("d", strtotime($mi_fecha));	

                $Mes = strftime("%m", strtotime($mes));
                $Anio = strftime("%Y", strtotime($mes));


                ?>

                <td> {{$Dia}} - {{$Mes}} -{{$Anio}} </td>


                <td>{{$solicitud->estado}} </td>

            
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

                @if($solicitud->arbol != null)
                <td>{{$solicitud->arbol->titulo}}</td>
                @else
                <td> Sin Asignar </td>
                @endif

                <td>
                {{$solicitud->pago_verificado}}
                </td>

                
                @if($solicitud->usuario['name'])
                <td>{{$solicitud->usuario['name']}}</td>
                @else
                <td>Web</td>
                @endif



                @if($solicitud->nombre_apellido != '')
                <td>{{$solicitud->nombre_apellido}}</td>
                @else
                <td>{{$solicitud->razon_social}}</td>
                @endif

                <td>{{$solicitud->nombre_facturar}}</td>

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