<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Acciones</th>
                <th>Fecha</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>

        @foreach($seguimientos as $seguimiento)
        <tr>
            <td>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="{{$seguimiento->id}}" data-original-title="Edit" class=" btn btn-info btn-sm editar">Editar</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="{{$seguimiento->id}}" data-original-title="Eliminar" class=" btn btn-danger btn-sm eliminar">Eliminar</a>
            </td>

            <td>{{$seguimiento->fecha}}</td>
            <td> <img style="width: 30%;" class="box" src="{{ asset('storage/seguimiento/miniatura/'.$seguimiento->imagen) }}" alt="{{$seguimiento->id}}" title=""></td>
        </tr>
        @endforeach
  
        </tbody>
 
    </table>