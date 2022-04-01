<div class="section-body colorsmart">
    <ul class="nav nav-tabs my-0 py-0 bg-transparent  border border-0" id="myTab" role="tablist">
        @foreach ($roles as $role)
            @if ($loop->first)
                <li class="nav-item h-100" role="presentation">
                    <button class="nav-link active  py-3" id="{{ $role->name }}-tab" data-bs-toggle="tab"
                        data-bs-target="#{{ $role->name }}" type="button" role="tab"
                        aria-controls="{{ $role->name }}" aria-selected="true">
                        <h2 class="h4 m-0 p-0">
                            {{ $role->name }}
                        </h2>
                    </button>
                </li>
            @else
                <li class="nav-item h-100" role="presentation">
                    <button class="nav-link py-3" id="{{ $role->name }}-tab" data-bs-toggle="tab"
                        data-bs-target="#{{ $role->name }}" type="button" role="tab"
                        aria-controls="{{ $role->name }}" aria-selected="false">
                        <h2 class="h4 m-0 p-0">
                            {{ $role->name }}
                        </h2>
                    </button>
                </li>
            @endif
        @endforeach
    </ul>
    <div class="tab-content bg-white pt-5">
        @foreach ($roles as $role)
            @if ($loop->first)
                <div class="tab-pane fade show active" id="{{ $role->name }}" role="tabpanel"
                    aria-labelledby="{{ $role->name }}-tab">
                    <table id="TableUsers" class="table table-striped ">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Correo Electrónico</th>
                                <th>Fecha de Creación</th>
                                <th>Fecha de Actualización</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($role->users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>
                                        <a href="{{ route('admin.users.show', $user) }}">{{ $user->name }}</a>
                                    </td>
                                    <td>{{ $user->surname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                    <td width="10px">
                                        <a href="{{ route('admin.users.edit', $user) }}"
                                            class="btn btn-primary btn-sm">Editar</a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="tab-pane fade" id="{{ $role->name }}" role="tabpanel"
                    aria-labelledby="{{ $role->name }}-tab">
                    <table id="Table{{ $role->name }}" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Correo Electrónico</th>
                                <th>created_at</th>
                                <th>updated_at</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($role->users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>
                                        <a href="{{ route('admin.users.show', $user) }}">{{ $user->name }}</a>
                                    </td>
                                    <td>{{ $user->surname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                    <td width="10px">
                                        <a href="{{ route('admin.users.edit', $user) }}"
                                            class="btn btn-primary btn-sm">Editar</a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        @endforeach
    </div>
</div>
