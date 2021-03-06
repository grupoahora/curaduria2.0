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
            <a class="navbar-brand text-white" href="#page-top">
                <img src="assets/img/Logo.png" height="52" alt="" loading="lazy" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item mx-4"><a class="nav-link px-2" href="#slide">Inicio</a></li>
                    <li class="nav-item mx-4"><a class="nav-link px-2" href="#about">Consultas</a></li>
                    {{-- <li class="nav-item mx-4"><a class="nav-link px-2" href="#portfolio">Productos</a></li> --}}
                    <li class="nav-item mx-4"><a class="nav-link px-2" href="#blog">Blog</a></li>
                    @guest
                    @else
                    @endguest
                    <li class="nav-item mx-4 ">
                        <a class="nav-link px-2" href="{{ route('contact') }}">Contáctenos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Carousel-->
    <div class="py-top-slide-cura" id="slide">
        <div id="carouselExampleControls" class="carousel h-50-cura slide " data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0"
                    class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner shadowcura">
                @foreach ($sliders as $slider)
                    @if ($loop->first)
                        <div class="carousel-item active  " id="h-50-cura">
                            <div class="container-fluid position-absolute  ">
                                <div class="card  bg-transparent border border-0">
                                    <div class="card-header bg-transparent border border-0">
                                        <h2 class="text-center text-white pt-5 pb-3 mx-5">
                                            {{ $slider->title }}
                                        </h2>
                                    </div>
                                    <div class="row mx-0 ">
                                        @if ($slider->extractone === null)
                                        @else
                                            <div class="mx-auto col-12 col-sm-3 mx-auto">
                                                <div class="card-body border border-0 ">
                                                    <div class="bg-color-slider-cura w-100 mx-auto mb-2">
                                                        <div class="px-3 py-1">
                                                            {!! $slider->extractone !!}

                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <a href="{{ route('post.detail', $slider) }}"
                                                            class="btn btn-sm btn-light">Ver más</a>
                                                    </div>

                                                </div>
                                            </div>
                                        @endif
                                        @if ($slider->extracttwo === null)
                                        @else
                                            <div class="col-3 mx-auto displaynonemobil">
                                                <div class="card-body border border-0 ">
                                                    <div class="bg-color-slider-cura w-100 mx-auto mb-2">
                                                        <div class="px-3 py-1">
                                                            {!! $slider->extracttwo !!}

                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <a href="{{ route('post.detail', $slider) }}"
                                                            class="btn btn-sm btn-light">Ver más</a>
                                                    </div>

                                                </div>
                                            </div>
                                        @endif
                                        @if ($slider->extractthree === null)
                                        @else
                                            <div class="col-3 mx-auto displaynonemobil">
                                                <div class="card-body border border-0 ">
                                                    <div class="bg-color-slider-cura w-100 mx-auto mb-2">
                                                        <div class="px-3 py-1">
                                                            {!! $slider->extractthree !!}

                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-start">
                                                        <a href="{{ route('post.detail', $slider) }}"
                                                            class="btn btn-sm btn-light">Ver más</a>
                                                    </div>

                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="carousel-item " id="h-50-cura">
                            <div class="container-fluid position-absolute  ">
                                <div class="container-fluid position-absolute  ">
                                    <div class="card  bg-transparent border border-0">
                                        <div class="card-header bg-transparent border border-0">
                                            <h2 class="text-center text-white pt-5 pb-3 mx-5">
                                                {{ $slider->title }}
                                            </h2>
                                        </div>
                                        <div class="row mx-0 ">
                                            @if ($slider->extractone === null)
                                            @else
                                                <div class="col-12 col-sm-3 mx-auto">
                                                    <div class="card-body border border-0 ">
                                                        <div class="bg-color-slider-cura w-100 mx-auto mb-2">
                                                            <div class="px-3 py-1">
                                                                {!! $slider->extractone !!}

                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-end">
                                                            <a href="{{ route('post.detail', $slider) }}"
                                                                class="btn btn-sm btn-light">Ver más</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endif
                                            @if ($slider->extracttwo === null)
                                            @else
                                                <div class="col-3 mx-auto displaynonemobil">
                                                    <div class="card-body border border-0 ">
                                                        <div class="bg-color-slider-cura w-100 mx-auto mb-2">
                                                            <div class="px-3 py-1">
                                                                {!! $slider->extracttwo !!}

                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-end">
                                                            <a href="{{ route('post.detail', $slider) }}"
                                                                class="btn btn-sm btn-light">Ver más</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endif
                                            @if ($slider->extractthree === null)
                                            @else
                                                <div class="col-3 mx-auto displaynonemobil">
                                                    <div class="card-body border border-0 ">
                                                        <div class="bg-color-slider-cura w-100 mx-auto mb-2">
                                                            <div class="px-3 py-1">
                                                                {!! $slider->extractthree !!}

                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-start">
                                                            <a href="{{ route('post.detail', $slider) }}"
                                                                class="btn btn-sm btn-light">Ver más</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
    <div class=" mt-4 pt-4" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-12  p-0 m-0 pb-2 pb-sm-0 px-2 ">
                    <a href="">
                        <div class="fw-bold text-white bg-redcura text-center py-2 rounded">
                            CONSULTA TU TRÁMITE AQUÍ
                        </div>
                    </a>
                </div>
                <div class="col-sm-1 col-6  p-0 m-0 px-2">

                    <div class="fw-bold text-black {{-- bg-redcura --}} text-center py-2 rounded">
                        Buscar Por:
                    </div>

                </div>
                <div class="col-sm-3 col-6  p-0 m-0 px-2">
                    <div class="fw-bold text-white ">

                        <select name="" id="tipoConsulta" class="form-control form-select">
                            <option value="" selected disabled>--Seleccionar--</option>
                            <option value="1">Cedula de Ciudadanía</option>
                            <option value="2">Numero de Radicado</option>
                            <option value="3">Rango de Fechas</option>
                        </select>

                    </div>
                </div>
                <div class="col-sm-3 col-12  p-0 m-0 px-2" id="colbtnquerynum">
                    <div class="fw-bold text-white ">
                        <form action="{{ route('search.proceedings') }}" method="GET" class="row p-0 m-0">
                            <div class="col-10  col-sm-10 px-2  m-0 h-auto text-middle">
                                <div class="d-block">
                                    <input type="hidden" id="tipoConsultaInput" name="tipoConsultaInput">
                                    <input id="search_products" name="search_words" type="text" class="form-control"
                                        placeholder="Buscando...">
                                </div>
                            </div>
                            <div class="col-1 px-0 mx-auto col-sm-2 mx-0 my-0 h-auto">
                                <button type="submit" id="search_proceed" class="btn btn-outline-success">
                                    <i class="fas fa-search"></i>
                                </button>
                                <!-- Modal -->

                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 col-12 d-none {{-- bg-redcura --}} p-0 m-0 px-2" id="colbtnqueryfecha">
                    <div class="fw-bold text-white ">
                        <a id="search_proceed" class="btn btn-outline-success bg-redcura"
                            href="{{ route('reports.date.public') }}">
                            <div class="fw-bold text-white  text-center py-0 my-0 rounded">
                                Buscar Por Rango de Fechas <i class="fas fa-search"></i>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="mb-4" id="portfolio">
        <div class="container-fluid px-2 px-sm-5 my-sm-0">
            <div class="row g-0">
                <h2 class="text-center h2 fs-2 fw-bold py-5 text-redcura">Formatos</h2>
                @foreach ($formats as $format)
                    <div class="col-lg-4 col-6 p-1 ">
                        <a class="portfolio-box" href="{{ $format->images->first()->url }}"
                            title="<div class=''>{{ $format->name }}<a type='button'  href='{{ $format->archives->first()->url }}'class='btn btn-warning rounded-pill border border-5 border-dark'>Descargar Formato</a></div>">
                            <img class="img-fluid radiuscura" src="{{ $format->images->first()->url }}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">{{ $format->name }}</div>
                                <p>
                                    {!! $format->description !!}
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="mb-4" id="blog">
        <div class="container-fluid px-4 px-lg-5">
            <div class="row gx-lg-5">
                <h2 class="text-center h2 fs-2 fw-bold py-5 text-redcura">Blog Curaduría Urbana 2</h2>
                @foreach ($posts as $post)
                    <div class="col-12 col-lg-12 col-xxl-4 mb-5 px-1">
                        <div class="card bg-blackcuraopacity border-0 h-100 ">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <a href="{{ route('post.detail', $post) }}">
                                    <div class="feature bg-redcura bg-gradient text-white radiuscura mb-4 mt-n4">
                                        <i class="{{ $post->category->icon }}"></i>
                                    </div>
                                </a>
                                <a href="{{ route('post.detail', $post) }}">
                                    <h2 class="fs-4 fw-bold">{{ $post->title }}</h2>
                                </a>

                                {{-- {!! $post->extractone !!} --}}

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- Footer-->

    <div class="footer">
        <p class="m-0 text-center text-white fs-4-cura-sm ">
            © Copyright 2022. Todos los derechos reservados. <br>
            Sitio web diseñado y desarrollado por manos Cucuteñas. <br>
            Hecho con ❤ <a class="text-danger" href="https://www.softwow.co">Softwow!</a>
        </p>

    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-color-modal-cura">
                <div class="modal-header bg-color-modal-cura-b">
                    <h5 class="modal-title" id="exampleModalLabel">DATOS DEL TRÁMITE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="searchs">


                    </div>

                    <table id="TableProceedings" class="table  table-responsive">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Radicado</th>
                                <th>Cedula de Ciudadanía</th>
                                <th>Clase del Acta</th>
                                <th>Descripción</th>
                                <th>Ver</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr id="tdproceed">


                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer bg-color-modal-cura-b">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
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
        
    </script>
    <!-- Core theme JS-->
    <script src="/js/scripts.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->

    <script>
        const tipoConsultaFecha = $('#tipoConsulta');

        var proceed = $('#search_products');
        var proceeds = $('#tdproceed');
        var searchproceed = $('#search_proceed');
        searchproceed.click(function() {
            $.ajax({
                url: "{{ route('get.proceed') }}",
                method: 'GET',
                data: {
                    proceed: proceed.val(),
                    consulta: tipoConsultaFecha.val(),
                },
                success: function(data) {
                    proceeds.empty();
                    proceeds.append(

                        $.each(data, function(index, element) {
                            console.log(element);
                            proceeds.append('<td>' + element.id + '</td>' + '<td>' +
                                element.radicado + '</td>' + '<td>' +
                                element.cc + '</td>' + '<td>' +
                                element.classproceeding + '</td>' + '<td>' +
                                element.descriptionclassproceeding + '</td>' +
                                '<td><button type="button" class="btn btn-success"><a href="../../archive_by_proceeding/' +
                                element.id + '"><i class="fas fa-eye"></i></button></td>')
                        })
                    )
                }

            });
            
            
        });
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
       
    </script>

    <script>
        var inputQueryFecha = $('#colbtnqueryfecha');
        var inputQueryNum = $('#colbtnquerynum');
        var tipoConsultaInput = $('#tipoConsultaInput');
        tipoConsultaFecha.change(function() {
            tipoConsultaInput.val(tipoConsultaFecha.val());
            console.log(tipoConsultaInput);
            if (tipoConsultaFecha.val() == 3) {
                inputQueryFecha.removeClass('d-none');
                inputQueryNum.addClass('d-none');
                console.log(tipoConsultaFecha.val());
            }
            if (tipoConsultaFecha.val() == 2 || tipoConsultaFecha.val() == 1) {
                inputQueryFecha.addClass('d-none');
                inputQueryNum.removeClass('d-none');
                console.log(tipoConsultaFecha.val());
            }
        });
        $('#search_products').autocomplete({
            source: function(request, response) {
                var tipoConsulta = $('#tipoConsulta');
                $.ajax({
                    url: "{{ route('proceed.json') }}",
                    dataType: 'json',
                    data: {
                        consulta: tipoConsulta.val(),
                        term: request.term
                    },
                    success: function(data) {
                        console.log(data);
                        response(data)
                    },
                });
            }
        });
    </script>
   
</body>

</html>
