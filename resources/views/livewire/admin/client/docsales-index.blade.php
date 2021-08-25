<div>
    <table id="TableDocsales" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Documento</th>
                <th>URL</th>
                <th>ID Formulario</th>
                <th>ID Venta</th>
                <th>Fecha de Creación</th>
                <th>Fecha de Actualización</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($docsales as $docsale)
                <tr>
                    <td>{{$docsale->id}}</td>
                    <td>{{$docsale->name}}</td>
                    <td>{{$docsale->url}}</td>
                    <td>{{$docsale->form_id}}</td>
                    <td>{{$docsale->sale_id}}</td>
                    <td>{{$docsale->create_at}}</td>
                    <td>{{$docsale->update_at}}</td>
                    <td width="10px">
                        <a href="{{route('client.sales.docsales.edit', $docsale)}}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('client.sales.docsales.destroy', $docsale)}}" method="POST">
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

