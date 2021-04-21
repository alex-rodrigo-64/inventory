@extends('plantilla')

<head>
    <link rel="shortcut icon" href="./images/logoempresa.png" type="image/x-icon" />
</head>

<nav class="navbar navbar-light" style="background-color: #0D6EFD;" class="container">
    <div class="row">
        <div class="container-fluid">
            <h1 style="color:#fff">REGISTRO DE DISCO</h1>

        </div>
    </div>
    </div>
</nav>

@section('seccion')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecnoVirtualDinamyc</title>

</head>

@if(session('mensaje'))
<div class="alert alert-danger">
    {{session('mensaje')}}
</div>

@endif


<!--<nav class="navbar navbar-expand-lg  bg-light">
                <a href="{{ url('/') }}" class="btn btn-secondary btn-lg btn-block">Volver</a>
    </nav>-->

<body>

    <header class="container-fluid" style="height: 720px; background-color: #0D6EFD ">
        <div class="row">
            <div class="col-12 align-self-center text-center placeholder-center">

                <form action="{{ route('disco.crear') }}" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        {{csrf_field()}}
                        <div class="col-md-4 col-md-offset-4 mt-md-5 ">
                            <div class="box box-primary">
                                <div class="panel panel-heading align-self-center">

                                    </br>
                                    <label form="id">ID</label>
                                    <input class="form-control {{$errors->has('id_numero')?'is-invalid':'' }}" type="text" name="id_numero" id="idhd"
                                        placeholder="Ingrese el ID" value="{{ old('id_numero') }}">
                                        {!! $errors->first('id_numero','<div class="invalid-feedback">:message</div>') !!}
                                    <br>

                                    <label form="TargetaLogica">Targeta Logica</label>
                                    <input class="form-control {{$errors->has('targetaLogica')?'is-invalid':'' }}" type="text" name="targetaLogica" id="targetaL"
                                        Placeholder="Ingrese la targeta logica" value="{{ old('targetaLogica') }}">
                                        {!! $errors->first('targetaLogica','<div class="invalid-feedback">:message</div>') !!}
                                    <br>

                                    <label form="Modelo">Modelo de Disco Duro</label>
                                    <input class="form-control {{$errors->has('modelo')?'is-invalid':'' }}" type="text" name="modelo" id="model"
                                        Placeholder="Ingrese el modelo" value="{{ old('modelo') }}">
                                        {!! $errors->first('modelo','<div class="invalid-feedback">:message</div>') !!}
                                    <br>

                                    <label form="Marca">Marca de Disco Duro</label>
                                    <input class="form-control {{$errors->has('marca')?'is-invalid':'' }}" type="text" name="marca" id="marca"
                                        Placeholder="Ingrese la marca" value="{{ old('marca') }}">
                                    {!! $errors->first('marca','<div class="invalid-feedback">:message</div>') !!}
                                    <br>
                                    <label form="Capacidad">Capacidad</label>
                                    <input class="form-control {{$errors->has('capacidad')?'is-invalid':'' }}"
                                        type="text" name="capacidad" id="capacidad" Placeholder="Ingrese la capacidad"
                                        value="{{ old('capacidad') }}">
                                    {!! $errors->first('capacidad','<div class="invalid-feedback">:message</div>') !!}
                                    <br>

                                    <label form="TipoEntrada">Tipo de entrada</label>
                                    <input class="form-control {{$errors->has('tipoEntrada')?'is-invalid':'' }}" type="text" name="tipoEntrada" id="tipoEntrada"
                                        Placeholder="Ingrese el tipo de entrada" value="{{ old('tipoEntrada') }}">
                                        {!! $errors->first('tipoEntrada','<div class="invalid-feedback">:message</div>') !!}
                                    <br>
                                    <label form="Observaciones">Observaciones</label>
                                    <input class="form-control" type="text" name="observaciones" id="Observaciones"
                                        value="{{ old('observaciones') }}">

                                    <br>
                                    <button type="submit" class="btn btn-success mb-5" value="Agregar"
                                        class>Registrar</button>
                                    <a href="{{ url('/') }}" class="btn btn-primary mb-5">Volver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>
</body>




@endsection