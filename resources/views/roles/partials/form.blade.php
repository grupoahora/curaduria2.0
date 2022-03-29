<div class="form-group">
    <div class="row">
        <div class="col-6">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del nuevo Rol']) !!}

            @error('name')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h2 class="h3">
            Permisos
        </h2>
    </div>
    <div class="card-body">
        <div class="section-body colorsmart">
            <ul class="nav nav-tabs my-0 py-0 bg-transparent  border border-0" id="myTab" role="tablist">
                @foreach ($permissions as $key => $permission)
                    @if ($loop->first)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active py-3" id="{{ str_replace(' ', '_', $key) }}-tab"
                                data-bs-toggle="tab" data-bs-target="#{{ str_replace(' ', '_', $key) }}" type="button"
                                role="tab" aria-controls="{{ str_replace(' ', '_', $key) }}" aria-selected="true">
                                <h2 class="h4 m-0 p-0">
                                    {{ $key }}
                                </h2>
                            </button>
                        </li>
                    @else
                        <li class="nav-item" role="presentation">
                            <button class="nav-link py-3" id="{{ str_replace(' ', '_', $key) }}-tab"
                                data-bs-toggle="tab" data-bs-target="#{{ str_replace(' ', '_', $key) }}" type="button"
                                role="tab" aria-controls="{{ str_replace(' ', '_', $key) }}" aria-selected="false">
                                <h2 class="h4 m-0 p-0">
                                    {{ $key }}
                                </h2>
                            </button>
                        </li>
                    @endif
                @endforeach
                <li class="nav-item ml-auto h-100 mr-1 my-auto " role="presentation">
                    <a class="btn btn-secondary px-2 rounded-3" id="checkedAll" {{-- href="{{route('admin.users.{{$key}}s.create')}}" --}}>seleccionar
                        todos por tab</a>
                </li>
                <li class="nav-item ml-auto h-100 mr-1 my-auto " role="presentation">
                    <a class="btn btn-secondary px-2 rounded-3" id="checkedAllAdmin" {{-- href="{{route('admin.users.{{$key}}s.create')}}" --}}>seleccionar
                        todos solo admin</a>
                </li>
            </ul>
            <div class="tab-content bg-white pt-5" id="myTabContent">
                @foreach ($permissions as $key => $permission)
                    @if ($loop->first)
                        <div class="tab-pane fade show active" id="{{ str_replace(' ', '_', $key) }}" role="tabpanel"
                            aria-labelledby="{{ str_replace(' ', '_', $key) }}-tab">
                            {{-- <button type="button" id="checkedAll">Seleccionar Todos</button> --}}


                            <div class="row">

                                @foreach ($permissions[$key] as $item)
                                    <div class="col-4">

                                        {!! Form::checkbox('permissions[]', $item->id, null, ['class' => 'mr-1 {{ $key }}']) !!}
                                        {{ $item->description }}

                                    </div>
                                @endforeach
                            </div>

                        </div>
                    @else
                        <div class="tab-pane fade" id="{{ str_replace(' ', '_', $key) }}" role="tabpanel"
                            aria-labelledby="{{ str_replace(' ', '_', $key) }}-tab">
                            {{-- <button type="button" id="checkedAll">Seleccionar Todos</button> --}}
                            <div class="row">

                                @foreach ($permissions[$key] as $item)
                                    <div class="col-4">

                                        {!! Form::checkbox('permissions[]', $item->id, null, ['class' => 'mr-1 {{ $key }}']) !!}
                                        {{ $item->description }}

                                    </div>
                                @endforeach
                            </div>

                        </div>
                    @endif
                @endforeach
                @push('js')
                    <script>
                        $(document).ready(function() {
                            $("#checkedAll").click(function() {
                                var as = $(".active").children('div.row').children('.col-4').children('input');
                                as.attr('checked', 'checked');

                                /* console.log(as); */

                            });
                        });
                        $(document).ready(function() {
                            $("#checkedAllAdmin").click(function() {
                                var as = $("input:checkbox");
                                as.attr('checked', 'checked');

                                console.log(as);

                            });
                        });
                    </script>
                @endpush
            </div>
        </div>
    </div>
</div>
