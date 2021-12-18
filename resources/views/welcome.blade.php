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
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
            <div class="container-fluid mx-5">
                <a class="navbar-brand text-white" href="#page-top">
                    <img src="assets/img/Logo.png" height="52" alt="" loading="lazy"/>
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item mx-4"><a class="nav-link px-2" href="#slide">Inicio</a></li>
                        <li class="nav-item mx-4"><a class="nav-link px-2" href="#about">Consultas</a></li>
                        <li class="nav-item mx-4"><a class="nav-link px-2" href="#portfolio">Productos</a></li>
                        <li class="nav-item mx-4"><a class="nav-link px-2" href="#blog">Blog</a></li>
                        <li class="nav-item mx-4 "><a class="nav-link px-2" href="{{route('proximamente')}}">Contactenos  </a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Carousel-->
        <section class="py-top-slide-cura h-50" id="slide">
            <div id="carouselExampleControls" class="carousel h-50-cura slide " data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner shadowcura">
                    <div class="carousel-item active  " id="h-50-cura">
                        {{-- <div class="row "> --}}

                                <div class="container-fluid position-absolute  ">
                                    <div class="card  bg-transparent border border-0">
                                        <div class="card-header bg-transparent border border-0">

                                            <h2 class="text-center text-white pt-5 pb-3 mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni consectetur dignissimos facilis quibusdam aliquam quidem praesentium sequi ut repellendus dolore? Aut repellat vero unde similique incidunt esse eaque itaque assumenda?</h2>
                                        </div>
                                        <div class="row mx-5 displaynonemobil">
                                            <div class="col-3 mx-auto">
                                                <div class="card-body border border-0 ">
                                                    <div class="bg-color-slider-cura w-100 mx-auto">

                                                        <p class=" text-white mx-5 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad cupiditate, nihil ullam laborum sint illum commodi rerum sequi culpa excepturi quod, accusamus iure ex ab quibusdam. Dolorum ullam eaque culpa!</p>
                                                    
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-3 mx-auto">
                                                <div class="card-body border border-0 ">
                                                    <div class="bg-color-slider-cura w-100 mx-auto">

                                                        <p class=" text-white mx-5 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad cupiditate, nihil ullam laborum sint illum commodi rerum sequi culpa excepturi quod, accusamus iure ex ab quibusdam. Dolorum ullam eaque culpa!</p>
                                                    
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-3 mx-auto">
                                                <div class="card-body border border-0 ">
                                                    <div class="bg-color-slider-cura w-100 mx-auto">

                                                        <p class=" text-white mx-5 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad cupiditate, nihil ullam laborum sint illum commodi rerum sequi culpa excepturi quod, accusamus iure ex ab quibusdam. Dolorum ullam eaque culpa!</p>
                                                    
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            
                        {{-- </div> --}}
                        {{-- <img src="assets/img/portfolio/fullsize/prueba.jpg" class="d-block w-100 "  alt="..."> --}}
                    </div>
                    <div class="carousel-item " id="h-50-cura">
                        <div class="container-fluid position-absolute  ">
                            <div class="container-fluid position-absolute  ">
                                    <div class="card  bg-transparent border border-0">
                                        <div class="card-header bg-transparent border border-0">

                                            <h2 class="text-center text-white pt-5 pb-3 mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni consectetur dignissimos facilis quibusdam aliquam quidem praesentium sequi ut repellendus dolore? Aut repellat vero unde similique incidunt esse eaque itaque assumenda?</h2>
                                        </div>
                                        <div class="row mx-5 displaynonemobil">
                                            <div class="col-3 mx-auto">
                                                <div class="card-body border border-0 ">
                                                    <div class="bg-color-slider-cura w-100 mx-auto">

                                                        <p class=" text-white mx-5 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad cupiditate, nihil ullam laborum sint illum commodi rerum sequi culpa excepturi quod, accusamus iure ex ab quibusdam. Dolorum ullam eaque culpa!</p>
                                                    
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-3 mx-auto">
                                                <div class="card-body border border-0 ">
                                                    <div class="bg-color-slider-cura w-100 mx-auto">

                                                        <p class=" text-white mx-5 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad cupiditate, nihil ullam laborum sint illum commodi rerum sequi culpa excepturi quod, accusamus iure ex ab quibusdam. Dolorum ullam eaque culpa!</p>
                                                    
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-3 mx-auto">
                                                <div class="card-body border border-0 ">
                                                    <div class="bg-color-slider-cura w-100 mx-auto">

                                                        <p class=" text-white mx-5 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad cupiditate, nihil ullam laborum sint illum commodi rerum sequi culpa excepturi quod, accusamus iure ex ab quibusdam. Dolorum ullam eaque culpa!</p>
                                                    
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                        </div>
                        {{-- <img src="assets/img/portfolio/fullsize/prueba.jpg" class="d-block w-100 "  alt="..."> --}}
                    </div>
                    <div class="carousel-item " id="h-50-cura">
                        <div class="container-fluid position-absolute  ">
                            <div class="container-fluid position-absolute  ">
                                    <div class="card  bg-transparent border border-0">
                                        <div class="card-header bg-transparent border border-0">

                                            <h2 class="text-center text-white pt-5 pb-3 mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni consectetur dignissimos facilis quibusdam aliquam quidem praesentium sequi ut repellendus dolore? Aut repellat vero unde similique incidunt esse eaque itaque assumenda?</h2>
                                        </div>
                                        <div class="row mx-5 displaynonemobil">
                                            <div class="col-3 mx-auto">
                                                <div class="card-body border border-0 ">
                                                    <div class="bg-color-slider-cura w-100 mx-auto">

                                                        <p class=" text-white mx-5 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad cupiditate, nihil ullam laborum sint illum commodi rerum sequi culpa excepturi quod, accusamus iure ex ab quibusdam. Dolorum ullam eaque culpa!</p>
                                                    
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-3 mx-auto">
                                                <div class="card-body border border-0 ">
                                                    <div class="bg-color-slider-cura w-100 mx-auto">

                                                        <p class=" text-white mx-5 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad cupiditate, nihil ullam laborum sint illum commodi rerum sequi culpa excepturi quod, accusamus iure ex ab quibusdam. Dolorum ullam eaque culpa!</p>
                                                    
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-3 mx-auto">
                                                <div class="card-body border border-0 ">
                                                    <div class="bg-color-slider-cura w-100 mx-auto">

                                                        <p class=" text-white mx-5 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad cupiditate, nihil ullam laborum sint illum commodi rerum sequi culpa excepturi quod, accusamus iure ex ab quibusdam. Dolorum ullam eaque culpa!</p>
                                                    
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                        </div>
                       {{--  <img src="assets/img/portfolio/fullsize/prueba.jpg" class="d-block w-100 "  alt="..."> --}}
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        {{-- <section class="page-section page-section-sm page-section-xxxl " id="slide">
            
        </section> --}}
        
        <!-- About-->
        <section class="page-section2 mt-6 mb-sm-0 mb-3 page-section2-sm" id="about">
            <div class="container">
                <div class="row pt-25">
                    <div class="col-sm-5 col-12  p-0 m-0 pb-2 pb-sm-0 ">
                        <div class="fw-bold text-white bg-redcura text-center py-2 rounded">
                            CONSULTA TU TRÁMITE AQUÍ
                        </div>
                    </div>
                    <div class="col-sm-7 col-12  p-0 m-0">
                        <div class="fw-bold text-white ">
                            <form class="row p-0 m-0">
                                <div class="col-10  col-sm-10 px-2  m-0 h-auto text-middle">

                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                </div>
                                <div class="col-1 px-0 mx-auto col-sm-2 mx-0 my-0 h-auto">
                                    
                                    <button class="btn btn-outline-success"  type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- <article class="row  px-4 gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        
                        <h2 class="text-white mt-5">Compre aqui su carpeta!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Ahorre tiempo en molestios tramites precesniales, dando clik abajo podras comprar una nueva carpeta!</p>
                        <a class="btn btn-dark btn-xl " href="#services">Get Started!</a>
                    </div>
                </article> --}}
            </div>
        </section>
        <!-- Services-->
        <section class="page-section3 page-section3-sm" id="{{-- services --}}">
            <div class="container-fluid  position-relative ">
                
                <div class="row mx-3 pt-3 bg-white d-flex justify-content-center position-relative border border-top-3 border-dark">
                    
                    <div class="col-sm-2 position-absolute position-sticky-sm  top-34 end-410 m-auto mt-2"><h2 class="h2 fw-bold text-center">COMPRE AQUÍ SU CARPETA</h2></div>
                    <div class="col-sm-6  me-sm-5 m mt-sm-5"><img class="imagemobil" src="assets/img/mano.png" height="250px" width="250px" /></div>
                    <div class="col-sm-4 position-absolute  bottom-41 end-156 ms-sm-5 end-16-sm bottom-30-sm widthcura-sm ">
                        <div class="card bg-transparent border-0 widthcura-sm">
                            {{-- <div class="card-header bg-transparent border-0 w-50">
                                <h2 class="h2 fw-bold">COMPRE AQUÍ SU CARPETA</h2>
                            </div> --}}
                            <div class="card-body bg-transparent border-0 widthcura-sm">
                                <div class="fs-6 fs-7-sm"> Ahorre tiempo en molestos trámites presneciales , dale click al boton de abajo para comprar una nueva carpeta</div>
                            </div>
                            <div class="card-footer bg-transparent border-0 widthcura-sm">
                                    <a type="button" href="{{route('proximamente')}}" class="btn btn-warning rounded-pill border border-5 border-dark">COMPRAR CARPETA</a>
                            </div>  
                        </div>
                        <div class="triangulo_top_right triangulo_top_right-sm position-absolute top-95n top-88n-sm end-21n-sm end-156n me-3"></div>
                    </div>
                    
                </div>
                <div class="triangulo_bottom_right triangulo_bottom_right-sm position-absolute bottom-0 end-0"></div>
                {{-- <h2 class="text-center mt-0">At Your Service</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">modificacion</h3>
                            <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Up to Date</h3>
                            <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Ready to Publish</h3>
                            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Made with Love</h3>
                            <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
        <!-- Portfolio-->
        <div class="mt-2" id="portfolio">
            <div class="container-fluid px-2 px-sm-5 my-sm-0">
                <div class="row g-0">
                    <h2 class="text-center h2 fs-2 fw-bold py-5 text-redcura">Productos</h2>
                    <div class="col-lg-4 col-6 p-1 ">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/11.jpg" title="<div class=''>Rural  Obra Nueva  <a type='button'  href='{{route('proximamente')}}'class='btn btn-warning rounded-pill border border-5 border-dark'>COMPRAR CARPETA</a></div>">
                            <img class="img-fluid radiuscura" src="assets/img/portfolio/thumbnails/11.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Rural</div>
                                <div class="project-name">Obra Nueva</div>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est error laboriosam consequatur hic quod qui. Expedita, tempore magnam quis error nemo aspernatur esse ea, quo odio aperiam aliquid numquam illo.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 p-1 ">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg" title="Rural Reloteo <a type='button'  href='{{route('proximamente')}}'class='btn btn-warning rounded-pill border border-5 border-dark'>COMPRAR CARPETA</a>">
                            <img class="img-fluid radiuscura" src="assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Rural</div>
                                <div class="project-name">Reloteo</div>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est error laboriosam consequatur hic quod qui. Expedita, tempore magnam quis error nemo aspernatur esse ea, quo odio aperiam aliquid numquam illo.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 p-1 ">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" title="Rural Demolición  <a type='button'  href='{{route('proximamente')}}'class='btn btn-warning rounded-pill border border-5 border-dark'>COMPRAR CARPETA</a>">
                            <img class="img-fluid radiuscura" src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Rural</div>
                                <div class="project-name">Demolición</div>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est error laboriosam consequatur hic quod qui. Expedita, tempore magnam quis error nemo aspernatur esse ea, quo odio aperiam aliquid numquam illo.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 p-1 ">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/22.jpg" title="Urbana Obra Nueva <a type='button'  href='{{route('proximamente')}}'class='btn btn-warning rounded-pill border border-5 border-dark'>COMPRAR CARPETA</a>">
                            <img class="img-fluid radiuscura" src="assets/img/portfolio/thumbnails/22.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Urbana</div>
                                <div class="project-name">Obra Nueva</div>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est error laboriosam consequatur hic quod qui. Expedita, tempore magnam quis error nemo aspernatur esse ea, quo odio aperiam aliquid numquam illo.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 p-1 ">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg" title="Urbana Reloteo <a type='button'  href='{{route('proximamente')}}'class='btn btn-warning rounded-pill border border-5 border-dark'>COMPRAR CARPETA</a>">
                            <img class="img-fluid radiuscura" src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Urbana</div>
                                <div class="project-name">Reloteo</div>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est error laboriosam consequatur hic quod qui. Expedita, tempore magnam quis error nemo aspernatur esse ea, quo odio aperiam aliquid numquam illo.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 p-1 ">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg" title="Urbana Demolición <a type='button'  href='{{route('proximamente')}}'class='btn btn-warning rounded-pill border border-5 border-dark'>COMPRAR CARPETA</a>">
                            <img class="img-fluid radiuscura" src="assets/img/portfolio/thumbnails/6.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Urbana</div>
                                <div class="project-name">Demolición</div>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est error laboriosam consequatur hic quod qui. Expedita, tempore magnam quis error nemo aspernatur esse ea, quo odio aperiam aliquid numquam illo.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <section class="page-section1 mb-6" id="blog">
            <div class="container-fluid px-4 px-lg-5">
                <div class="row gx-lg-5">
                    <h2 class="text-center h2 fs-2 fw-bold py-5 text-redcura">Blog Curaduría Urbana 2</h2>
                    <div class="col-6 col-lg-6 col-xxl-4 mb-5 px-1">
                        <div class="card bg-blackcuraopacity border-0 h-100 ">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-redcura bg-gradient text-white radiuscura mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                <h2 class="fs-4 fw-bold">Fresh new layout</h2>
                                <p class="mb-0">With Bootstrap 5, we've created a fresh new layout for this template!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-xxl-4 mb-5 px-1">
                        <div class="card bg-blackcuraopacity border-0 h-100 ">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-redcura bg-gradient text-white radiuscura mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <h2 class="fs-4 fw-bold">Free to download</h2>
                                <p class="mb-0">As always, Start Bootstrap has a powerful collectin of free templates.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-xxl-4 mb-5 px-1">
                        <div class="card bg-blackcuraopacity border-0 h-100 ">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-redcura bg-gradient text-white radiuscura mb-4 mt-n4"><i class="bi bi-card-heading"></i></div>
                                <h2 class="fs-4 fw-bold">Jumbotron hero header</h2>
                                <p class="mb-0">The heroic part of this template is the jumbotron hero header!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-xxl-4 mb-5 px-1">
                        <div class="card bg-blackcuraopacity border-0 h-100 ">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-redcura bg-gradient text-white radiuscura mb-4 mt-n4"><i class="bi bi-bootstrap"></i></div>
                                <h2 class="fs-4 fw-bold">Feature boxes</h2>
                                <p class="mb-0">We've created some custom feature boxes using Bootstrap icons!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-xxl-4 mb-5 px-1">
                        <div class="card bg-blackcuraopacity border-0 h-100 ">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-redcura bg-gradient text-white radiuscura mb-4 mt-n4"><i class="bi bi-code"></i></div>
                                <h2 class="fs-4 fw-bold">Simple clean code</h2>
                                <p class="mb-0">We keep our dependencies up to date and squash bugs as they come!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-xxl-4 mb-5 px-1">
                        <div class="card bg-blackcuraopacity border-0 h-100 ">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-redcura bg-gradient text-white radiuscura mb-4 mt-n4"><i class="bi bi-patch-check"></i></div>
                                <h2 class="fs-4 fw-bold">A name you trust</h2>
                                <p class="mb-0">Start Bootstrap has been the leader in free Bootstrap templates since 2013!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        
        <div class="footer"> 
            <div class="py-2 bg-dark w-100">
                <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Grupo Ahora S.A.S 2021</p></div>
            </div>

        </div>
        
         
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>