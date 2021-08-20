<div>
    <table id="TableFolders" class="table table-striped">
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
            @foreach ($folders as $folder)
                <tr>
                    <td>{{$folder->id}}</td>
<<<<<<< HEAD:resources/views/livewire/admin/user/folders-index.blade.php
                    <td>{{$folder->namefolder}}</td>
                    <td>{{$folder->category_id}}</td>
                    <td>{{$folder->user->name}}</td>
=======
                    <td>{{$folder->name_products}}</td>
                    <td>{{$folder->category_id}}</td>
                    <td>{{$folder->user_id}}</td>
>>>>>>> 1362026c017fd3811ae4ca4db8dbf5ce33605e85:resources/views/livewire/admin/user/transacts-index.blade.php
                    <td>{{$folder->create_at}}</td>
                    <td>{{$folder->update_at}}</td>
                    <td width="10px">
                        <a href="{{route('admin.users.folders.edit', $folder)}}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.users.folders.destroy', $folder)}}" method="POST">
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

