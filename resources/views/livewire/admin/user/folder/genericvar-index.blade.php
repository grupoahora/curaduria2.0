<div>
    <table id="TableGenericVars" class="table table-responsive table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Variable T. 1</th>
                <th>Variable T. 2</th>
                <th>Variable A. 1</th>
                <th>Variable A. 2</th>
                <th>Variable A. 3</th>
                <th>Variable A. 4</th>
                <th>Variable A. 5</th>
                <th>Variable A. 6</th>
                <th>Variable A. 7</th>
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
                <th>Fecha de Creación</th>
                <th>Fecha de Actualización</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genericvars as $genericvar)
                <tr>
                    <td>{{$genericvar->id}}</td>
                    <td>{{$genericvar->name}}</td>
                    <td>{{$genericvar->vart1}}</td>
                    <td>{{$genericvar->vart2}}</td>
                    <td>{{$genericvar->vara1}}</td>
                    <td>{{$genericvar->vara2}}</td>
                    <td>{{$genericvar->vara3}}</td>
                    <td>{{$genericvar->vara4}}</td>
                    <td>{{$genericvar->vara5}}</td>
                    <td>{{$genericvar->vara6}}</td>
                    <td>{{$genericvar->vara7}}</td>
                    <td>{{$genericvar->varc1}}</td>
                    <td>{{$genericvar->varc2}}</td>
                    <td>{{$genericvar->varc3}}</td>
                    <td>{{$genericvar->varc4}}</td>
                    <td>{{$genericvar->varc5}}</td>
                    <td>{{$genericvar->varc6}}</td>
                    <td>{{$genericvar->varc7}}</td>
                    <td>{{$genericvar->varc8}}</td>
                    <td>{{$genericvar->varc9}}</td>
                    <td>{{$genericvar->varc10}}</td>
                    <td>{{$genericvar->varc11}}</td>
                    <td>{{$genericvar->varc12}}</td>
                    <td>{{$genericvar->create_at}}</td>
                    <td>{{$genericvar->update_at}}</td>
                    <td width="10px">
                        <a href="{{route('admin.users.folders.genericvars.edit', $genericvar)}}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.users.folders.genericvars.destroy', $genericvar)}}" method="POST">
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

