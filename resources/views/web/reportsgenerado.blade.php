<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Curaduría Urbana 2 Cúcuta</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="/css/style-navbar.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jqueryui-editable/css/jqueryui-editable.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="/css/jquery-ui.min.css">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
        <div class="container-fluid mx-5">
            <a class="navbar-brand text-white" href="/#page-top">
                <img src="/assets/img/Logo.png" height="52" alt="" loading="lazy" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item mx-4"><a class="nav-link px-2" href="#slide">Inicio</a></li>
                    <li class="nav-item mx-4"><a class="nav-link px-2" href="/#about">Consultas</a></li>
                    {{-- <li class="nav-item mx-4"><a class="nav-link px-2" href="/#portfolio">Productos</a></li> --}}
                    <li class="nav-item mx-4"><a class="nav-link px-2" href="/#blog">Blog</a></li>
                    @guest
                        {{-- <li class="nav-item mx-4"><a class="nav-link px-2" href="{{ route('login') }}">Iniciar
                                Sesión</a>
                        </li> --}}
                    @else
                    @endguest
                    <li class="nav-item mx-4 "><a class="nav-link px-2" href="{{ route('contact') }}">Contáctenos
                        </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5 pt-5 h-100-cura h-cura-auto" id="slide">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="section-body colorsmart">
                            <ul class="nav nav-tabs my-0 py-0 bg-transparent  border border-0" id="myTab"
                                role="tablist">
                                <li class="nav-item h-100" role="presentation">
                                    <button class="nav-link active py-3" id="user-tab" data-bs-toggle="tab"
                                        data-bs-target="#user" type="button" role="tab" aria-controls="user"
                                        aria-selected="true">
                                        <h2 class="h4 m-0 p-0">
                                            Reportes Generado
                                        </h2>
                                    </button>
                                </li>

                                <li class="nav-item ml-auto h-100 mr-1 my-auto btnactive" id="btnuser"
                                    role="presentation">
                                    {!! Form::open(['route' => 'genere.reports.public']) !!}

                                    {!! Form::label('fechaini', 'Fecha Inicial', ['class' => 'form-label']) !!}
                                    {!! Form::date('fechaini', null, ['class' => 'form-input']) !!}
                                    {!! Form::label('fechafin', 'Fecha Final', ['class' => 'form-label']) !!}
                                    {!! Form::date('fechafin', null, ['class' => 'form-input']) !!}
                                    {!! Form::submit('Generar Reporte', ['class' => 'btn btn-secondary px-2 rounded-3']) !!}
                                    {!! Form::close() !!}
                                    {{-- <a class="btn btn-secondary px-2 rounded-3" href="">Generar Reporte</a> --}}
                                </li>

                            </ul>
                            <div class="tab-content bg-white pt-5" id="myTabContent">
                                <div class="tab-pane fade show active" id="user" role="tabpanel"
                                    aria-labelledby="user-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="TableProceedings" class="table table-striped table-responsive-md">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Radicado</th>
                                                        <th>Cedula de Ciudadanía</th>
                                                        <th>Clase de Procedimiento</th>
                                                        <th>Descripción de la clase del Procedimiento</th>
                                                        <th>Fecha de Registro en <a class="text-link"
                                                                href="#">www.curaduriadoscucuta.com</a></th>
                                                        <th>Fecha de Expedición</th>
                                                        <th>Ver Procedimiento</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($proceedings as $proceeding)
                    <tr>
                        <td>{{ $proceeding->id }}</td>
                        <td>
                            {{ $proceeding->radicado }}
                        </td>
                        <td>
                            {{ $proceeding->cc }}
                        </td>
                        <td>{{ $proceeding->classproceeding }}</td>
                        <td>{{ $proceeding->descriptionclassproceeding }}</td>
                        <td>{{ $proceeding->created_at }}</td>
                        <td>{{ $proceeding->fechaexpedicion }}</td>
                        <td>
                            @if ($proceeding->archives->count() == 0)
                                <a href="#"> No existe Archivo</a>
                            @endif
                            @foreach ($proceeding->archives as $file)
                                @if ($loop->first)
                                    <a href="{{ $file->url }}" target="_blank">Ver Procedimiento</a>
                                @endif
                                
                            @endforeach

                        </td>
                        
                    </tr>
     @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Comments section-->


        </div>
    </div>
    <!-- Footer-->

    <div class="footer">
        <p class="m-0 text-center text-white fs-4-cura-sm ">
            © Copyright 2021. Todos los derechos reservados. <br>
            Sitio web diseñado y desarrollado por manos Cucuteñas. <br>
            Hecho con ❤ <a class="text-danger" href="https://www.softwow.co">Softwow!</a>
        </p>
    </div>



    <!-- Bootstrap core JS-->.

    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jqueryui-editable/js/jqueryui-editable.min.js"></script>

    <script src="/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables.buttons.min.js"></script>
    <script src="/js/jszip.min.js"></script>
    <script src="/js/pdfmake.min.js"></script>
    <script src="/js/vfs_fonts.js"></script>
    <script src="/js/buttons.html5.min.js"></script>
    <script src="/js/buttons.print.min.js"></script>
    <script src="/js/changebtnactive.js"></script>
    <script>
        $(document).ready(function() {
            $('#TableProceedings').DataTable({
                responsive: true,
                dom: 'Bfrtip',
                
                buttons: [
                    {
                        extend: 'pdfHtml5',
                        orientation: 'landscape',
                        pageSize: 'LEGAL'
                    },
                    'copy', 'csv', 'excel',  'print'
                ]
            });
        });
    </script>
    <!-- Core theme JS-->
    <script src="/js/scripts.js"></script>
{{--     {!! Html::script('/js/main.js') !!}
    {!! Html::script('/js/jquery-3.3.1.min.js') !!} --}}
    <script>
        $("p").parent("#content").css("word-wrap", "break-word");
    </script>

</body>

</html>
