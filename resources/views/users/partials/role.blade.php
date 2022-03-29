<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body border border-light">
                <table class="table table-striped" id="TableRole">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Rol</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td width="10px">
                                    <button type="button" class="nav-link btn btn-primary px-2 rounded-3"
                                        data-bs-toggle="modal" data-bs-target="#editRolModal">
                                        Editar
                                    </button>
                                    <div class="modal fade" id="editRolModal" tabindex="-1" role="dialog"
                                        aria-labelledby="editRolModalModalLabel" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="newUserModalModalLabel">
                                                        Editar Rol
                                                    </h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::model($role, ['route' => ['roles.update', $role], 'method' => 'put']) !!}
                                                    @include(
                                                        'roles.partials.form'
                                                    )
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">Cerrar</button>
                                                    {!! Form::submit('Editar Rol', ['class' => 'btn btn-primary']) !!}
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <a href="{{ route('admin.roles.edit', $role) }}"
                                        class="btn btn-sm btn-primary">Editar</a> --}}
                                </td>
                                <td width="10px">
                                    <form action="{{ route('roles.destroy', $role) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger" width= "10px">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
