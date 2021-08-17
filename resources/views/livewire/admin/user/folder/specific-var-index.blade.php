<div>
    <table id="TableSpecificVars" class="table table-responsive table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Variable C. 1</th>
                <th>Variable C. 2</th>
                <th>Variable C. 3</th>
                <th>Variable C. 4</th>
                <th>Variable C. 5</th>
                <th>Variable C. 6</th>
                <th>Variable C. 7</th>
                <th>Variable C. 8</th>
                <th>Variable C. 9</th>
                <th>Variable C. 10</th>
                <th>Variable C. 11</th>
                <th>Variable C. 12</th>
                <th>ID Trámite</th>
                <th>Fecha de Creación</th>
                <th>Fecha de Actualización</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($specificvars as $specificvar)
                <tr>
                    <td>{{$specificvar->id}}</td>
                    <td>{{$specificvar->name}}</td>
                    <td>{{$specificvar->varc1}}</td>
                    <td>{{$specificvar->varc2}}</td>
                    <td>{{$specificvar->varc3}}</td>
                    <td>{{$specificvar->varc4}}</td>
                    <td>{{$specificvar->varc5}}</td>
                    <td>{{$specificvar->varc6}}</td>
                    <td>{{$specificvar->varc7}}</td>
                    <td>{{$specificvar->varc8}}</td>
                    <td>{{$specificvar->varc9}}</td>
                    <td>{{$specificvar->varc10}}</td>
                    <td>{{$specificvar->varc11}}</td>
                    <td>{{$specificvar->varc12}}</td>
                    <td>{{$specificvar->folder_id}}</td>
                    <td>{{$specificvar->create_at}}</td>
                    <td>{{$specificvar->update_at}}</td>
                    <td width="10px">
                        <a href="{{route('admin.users.folders.specificvars.edit', $specificvar)}}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.users.folders.specificvars.destroy', $specificvar)}}" method="POST">
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

