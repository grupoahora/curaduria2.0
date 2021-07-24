<div>
   
    <table id="TableUser" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>telefono</th>
                <th>created_at</th>
                <th>update_at</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->number}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    
                    <td width="10px">
                        <a  class="btn btn-primary" href="{{route('admin.users.edit', $user)}}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
