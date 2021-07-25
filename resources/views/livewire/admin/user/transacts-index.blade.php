<div>
    <table id="TableTransacts" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>ID Usuario</th>
                <th>Fecha de Creación</th>
                <th>Fecha de Actualización</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transacts as $transact)
                <tr>
                    <td>{{$transact->id}}</td>
                    <td>{{$transact->name_products}}</td>
                    <td>{{$transact->category_id}}</td>
                    <td>{{$transact->user_id}}</td>
                    <td>{{$transact->create_at}}</td>
                    <td>{{$transact->update_at}}</td>
                    <td width="10px">
                        <a href="{{route('admin.transacts.edit', $transact)}}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.transacts.destroy', $transact)}}" method="POST">
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

