<div>
    <table id="TableSales" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Usuario</th>
                <th>Trámite</th>
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
                    <td>{{$sale->folder->namefolder}}</td>
                    <td>{{$sale->created_at}}</td>
                    <td>{{$sale->updated_at}}</td>
                    <td width="10px">
                        <a href="{{route('client.sales.edit', $sale)}}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('client.sales.destroy', $sale)}}" method="POST">
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

