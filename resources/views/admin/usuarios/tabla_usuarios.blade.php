<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Acciones</th>
                <th>Id</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>
                    <a href="javascript:void(0)" data-toggle="tooltip"  data-id="{{$usuario->id}}" data-original-title="Edit" class=" btn btn-info btn-sm editar">Editar</a>
                    <a href="javascript:void(0)" data-toggle="tooltip"  data-id="{{$usuario->id}}" data-original-title="Eliminar" class=" btn btn-danger btn-sm eliminar">Eliminar</a>
                </td>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->tipo}}</td>
            </tr>
        @endforeach
        </tbody>
 
    </table>