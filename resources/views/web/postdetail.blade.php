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
                    <li class="nav-item mx-4 "><a class="nav-link px-2"
                            href="{{ route('contact') }}">Contáctenos
                        </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5 pt-5 h-100-cura h-cura-auto" id="slide">
        <div class="row">
            <div class="col-lg-10">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Publicado el {{ $post->created_at }} Por <a
                                href="/#page-top">Curaduría Urbana 2</a></div>
                        <!-- Post categories-->
                        @switch($post->icon)
                            @case('fas fa-info-circle')
                                <a class="badge bg-secondary text-decoration-none link-light" href="#!">Información General</a>
                            @break

                            @case('fas fa-exclamation-circle')
                                <a class="badge bg-danger text-decoration-none link-light" href="#!">Importante</a>
                            @break

                            @case('fas fa-users-cog')
                                <a class="badge bg-primary text-decoration-none link-light" href="#!">Corporativo</a>
                            @break

                            @case('fas fa-newspaper')
                                <a class="badge bg-secondary text-decoration-none link-light" href="#!">Noticia</a>
                            @break

                            @default
                        @endswitch

                    </header>
                    <!-- Preview image figure-->

                    <!-- Post content-->
                    <section class="mb-5 h-100">
                        <div id="content">
                            {!! $post->content !!}
                        </div>
                        
                    </section>
                </article>
                <!-- Comments section-->
            </div>
            <!-- Side widgets-->
            <div class="col-lg-2">

                <div class="card mb-4">
                    <div class="card-header">Otras Publicaciones</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-unstyled mb-0">
                                    @foreach ($posts as $item)
                                        
                                    <li><a href="{{ route('post.detail', $item) }}">{{$item->title}}</a></li> 
                                    <li><br></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->

            </div>
        </div>
    </div>
    <!-- Footer-->

    <div class="footer2">
        <p class="m-0 text-center text-white fs-4-cura-sm ">
            © Copyright 2021. Todos los derechos reservados. <br>
            Sitio web diseñado y desarrollado por manos Cucuteñas. <br>
            Hecho con ❤ <a class="text-danger" href="https://www.softwow.co">Softwow!</a> 
        </p>
    </div>



    <!-- Bootstrap core JS-->.
    {!! Html::script('/js/jquery-3.6.0.min.js') !!}
    {!! Html::script('/js/jquery-ui.min.js') !!}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="/js/scripts.js"></script>
    {!! Html::script('/js/main.js') !!}
    {!! Html::script('/js/jquery-3.3.1.min.js') !!}
    <script>
        $("p").parent("#content").css("word-wrap", "break-word");
    </script>

</body>

</html>
