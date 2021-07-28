<div>
    <table id="TableBlades" class="table table-responsive table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>ID Trámite</th>
                <th>Fecha de Creación</th>
                <th>Fecha de Actualización</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blades as $blade)
                <tr>
                    <td>{{$blade->id}}</td>
                    <td>{{$blade->name}}</td>
                    <td>{{$blade->transact_id}}</td>
                    <td>{{$blade->create_at}}</td>
                    <td>{{$blade->update_at}}</td>
                    <td width="10px">
                        <a href="{{route('admin.users.transacts.blades.edit', $blade)}}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.users.transacts.blades.destroy', $blade)}}" method="POST">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger btn-sm"">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

