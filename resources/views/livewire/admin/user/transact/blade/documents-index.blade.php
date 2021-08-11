<div>
    <table id="TableDocuments" class="table table-responsive table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>URL</th>
                <th>ID Formulario</th>
                <th>ID Usuario</th>
                <th>Fecha de Creación</th>
                <th>Fecha de Actualización</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($documents as $document)
                <tr>
                    <td>{{$document->id}}</td>
                    <td>{{$document->name}}</td>
                    <td>{{$document->url}}</td>
                    <td>{{$document->form_id}}</td>
                    <td>{{$document->user_id}}</td>
                    <td>{{$document->create_at}}</td>
                    <td>{{$document->update_at}}</td>
                    <td width="10px">
                        <a href="{{route('admin.users.transacts.documents.edit', $document)}}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.users.transacts.documents.destroy', $document)}}" method="POST">
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

