<div>
    <table id="TableSales" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Usuario</th>
                <th>ID Trámite</th>
                <th>Fecha de Creación</th>
                <th>Fecha de Actualización</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
                <tr>
                    <td>{{$sale->id}}</td>
                    <td>{{$sale->user_id}}</td>
                    <td>{{$sale->folder_id}}</td>
                    <td>{{$sale->create_at}}</td>
                    <td>{{$sale->update_at}}</td>
                    <td width="10px">
                        <a href="{{route('clients.sales.edit', $sale)}}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('clients.sales.destroy', $sale)}}" method="POST">
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

