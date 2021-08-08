@extends('adminlte::page')

@section('title', 'Curaduría Urbana 2')

@section('content_header')
    <h1>Curaduría Urbana 2</h1>
@stop

@section('content')
<button id="btnCrearPdf"> Generar Pdfasdas d</button>
    <div class="container border border-dark" id="pdf">
        <!-- Radicado -->
        <div class="row justify-content-md-top form-group pt-2">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Radicado:</div>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" placeholder="Ingrese el número de radicado">
                </input>
            </div>
        </div>
        <!-- Licencia y Modalidad -->
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Licencia y Modalidad:</div>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" placeholder="Ingrese el número de licencia y Modalidad">
                </input>
            </div>
        </div>
        <!-- Solicitante -->
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Solicitante:</div>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" placeholder="Ingrese el nombre del solicitante">
                </input>
            </div>
        </div>
        <!-- Cedula -->
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Cédula:</div>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" placeholder="Ingrese el número de cédula">
                </input>
            </div>
        </div>
        <!-- Dirección de obra -->
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Dirección de obra:</div>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" placeholder="Ingrese la dirección de la obra">
                </input>
            </div>
        </div>
        <!-- Dirección de correspondencia -->
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Dirección de correspondencia:</div>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" placeholder="Ingrese la dirección de correspondencia">
                </input>
            </div>
        </div>
        <!-- Identificación predial -->
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Identificación predial:</div>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" placeholder="Ingrese la identificación predial">
                </input>
            </div>
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Estrato:</div>
            </div>
            <div class="col-2">
                <input type="number" class="form-control">
                </input>
            </div>
        </div>
        <!-- Certificado de Libertad y Tradición -->
        <div class="row justify-content-md-top form-group">
            <div class="col-4">
                <div class="border border-dark bg-light form-control text-center">Certificado de Libertad y Tradición (EP):</div>
            </div>
            <div class="col-8">
                <input type="text" class="form-control" placeholder="Ingrese certificado de Libertad y Tradición">
                </input>
            </div>
        </div>
        <!-- Constructor responsable -->
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Constructor Responsable:</div>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" placeholder="Ingrese el nombre del constructor responsable">
                </input>
            </div>
            <div class="col-2">
                <div class="border border-dark bg-light form-control text-center">No. Tarjeta:</div>
            </div>
            <div class="col-2">
                <input type="text" class="form-control" placeholder="Número">
                </input>
            </div>
        </div>
        <!-- Arquitecto diseñador -->
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Arquitecto Diseñador:</div>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" placeholder="Ingrese el nombre del arquitecto diseñador">
                </input>
            </div>
            <div class="col-2">
                <div class="border border-dark bg-light form-control text-center">No. Tarjeta:</div>
            </div>
            <div class="col-2">
                <input type="text" class="form-control" placeholder="Número">
                </input>
            </div>
        </div>
        <!-- Ingeniero civil estructural -->
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Ingeniero Civil Estructural:</div>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" placeholder="Ingrese el nombre del ingeniero civil estructural">
                </input>
            </div>
            <div class="col-2">
                <div class="border border-dark bg-light form-control text-center">No. Tarjeta:</div>
            </div>
            <div class="col-2">
                <input type="text" class="form-control" placeholder="Número">
                </input>
            </div>
        </div>
        <!-- Ingeniero de Geotecnista -->
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Ingeniero de Geotecnista:</div>
            </div>
            <div class="col-5">
                <input type="text" class="form-control" placeholder="Ingrese el nombre del ingeniero geotecnista">
                </input>
            </div>
            <div class="col-2">
                <div class="border border-dark bg-light form-control text-center">No. Tarjeta:</div>
            </div>
            <div class="col-2">
                <input type="text" class="form-control" placeholder="Número">
                </input>
            </div>
        </div>
        <!-- Uso de edificación -->
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Uso de edificación:</div>
            </div>
            <div class="col-4">
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Residencial:</div>
                    </div>
                    <div class="col-2">
                        <div class="checkbox justify-content-md">
                            <label><input type="checkbox" value=""></label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-top">
                    <div class="col-5">
                            <div class="border border-dark bg-light form-control text-center">Industrial:</div>
                        </div>
                        <div class="col-2">
                            <label><input type="checkbox" value=""></label>
                            </input>
                        </div>
                    <div class="col"></div>
                </div>
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Dotación:</div>
                    </div>
                    <div class="col-2">
                        <div class="checkbox justify-content-md">
                            <label><input type="checkbox" value=""></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Comercial:</div>
                    </div>
                    <div class="col-2">
                        <div class="checkbox justify-content-md">
                            <label><input type="checkbox" value=""></label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Institucional:</div>
                    </div>
                    <div class="col-2">
                        <label><input type="checkbox" value=""></input></label>
                    </div>
                    <div class="col">

                    </div>
                </div>
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Otros:</div>
                    </div>
                    <div class="col-2">
                        <div class="checkbox justify-content-md">
                            <label><input type="checkbox" value=""></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nomenclatura a asignar -->
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Nomenclatura a asignar:</div>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" placeholder="Ingrese la nomenclatura">
                </input>
            </div>
        </div>
        <!-- Descripción del proyecto -->
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Descripción del proyecto:</div>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" placeholder="Ingrese la descripción del proyecto">
                </input>
            </div>
        </div>
        <!-- Área del lote -->
        <div class="row justify-content-md-top form-group">
            <div class="col-2">
                <div class="border border-dark bg-light form-control text-center">Área del lote:</div>
            </div>
            <div class="col-5">
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Escritura pública:</div>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Planos:</div>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
            </div>
        </div>
        <!-- Área total a -->
        <div class="row justify-content-md-top form-group">
            <div class="col-2">
                <div class="border border-dark bg-light form-control text-center">Área total a:</div>
            </div>
            <div class="col-10">
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Construir:</div>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Subdividir:</div>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Reconocer:</div>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Adecuar:</div>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Demoler:</div>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Ampliar:</div>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Cerrar:</div>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Modificar:</div>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Urbanizar:</div>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
            </div>
        </div>
        <!-- Número de estacionamientos -->
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Número de estacionamientos:</div>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" placeholder="Ingrese el número de estacionamientos">
                </input>
            </div>
        </div>
        <!-- Índices -->
        <div class="row justify-content-md-top form-group">
            <div class="col-2">
                <div class="border border-dark bg-light form-control text-center">Índices:</div>
            </div>
            <div class="col-5">
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Ocupación:</div>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Construcción:</div>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
            </div>
        </div>
        <!-- Número de soluciones -->
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Número de soluciones:</div>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" placeholder="">
                </input>
            </div>
        </div>
        <!-- Antejardín -->
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Antejardín:</div>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" placeholder="">
                </input>
            </div>
        </div>
        <!-- Andén -->
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Andén:</div>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" placeholder="">
                </input>
            </div>
        </div>
        <!-- Aislamiento posterior -->
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light text-center form-control">Aislamiento posterior:</div>
            </div>
            <div class="col-9">
                <input type="text" class="form-control" placeholder="">
                </input>
            </div>
        </div>
        {{-- Altura de edificación --}}
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Altura de edificación:</div>
            </div>
            <div class="col-4">
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Pisos:</div>
                    </div>
                    <div class="col-7">
                        <input type="number" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Metros:</div>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
            </div>
        </div>
        {{-- ALtura de cerramiento --}}
        <div class="row justify-content-md-top form-group">
            <div class="col-3">
                <div class="border border-dark bg-light form-control text-center">Altura de cerramiento:</div>
            </div>
            <div class="col-4">
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Muro:</div>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="row justify-content-md-top">
                    <div class="col-5">
                        <div class="border border-dark bg-light form-control text-center">Reja:</div>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
            </div>
        </div>
        {{-- Altura presentada y Altura permitida --}}
        <div class="row justify-content-md-top form-group">
            <div class="col-6">
                <div class="row justify-content-md-top">
                    <div class=col-6>
                        <div class="border border-dark bg-light form-control text-center">Altura presentada:</div>
                    </div>
                    <div class=col-6>
                        <input type="text" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row justify-content-md-top">
                    <div class=col-6>
                        <div class="border border-dark bg-light form-control text-center">Altura permitida:</div>
                    </div>
                    <div class=col-6>
                        <input type="text" class="form-control" placeholder="">
                        </input>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/scriptpdf.js"></script>
    <script> console.log('Hi!'); </script>
@stop