<div>
    <table id="TableForms" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>URL</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($forms as $form)
                <tr>
                    <td>{{$form->id}}</td>
                    <td>{{$form->name}}</td>
                    <td>{{$form->url}}</td>
                    <td width="10px">
                        <a href="{{route('admin.users.folders.forms.edit', $form)}}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.users.folders.forms.destroy', $form)}}" method="POST">
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

