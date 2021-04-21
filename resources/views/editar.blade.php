@extends('plantilla')
<nav class="navbar navbar-light" style="background-color: #FFCB00;" <div class="container">
    <div class="row">
        <div class="container-fluid">
            <h1 style="color:#fff">Editar Disco</h1>

        </div>
    </div>
    </div>
</nav>
@section('seccion')
<header class="container-fluid" style="height: 720px; background-color: #FFCB00 ">
        <div class="row">
            <div class="col-12 align-self-center text-center placeholder-center">

<form action="{{ route('update', $disco->id) }}" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        {{csrf_field()}}
                        {{ method_field('PUT') }}
                        <div class="col-md-4 col-md-offset-4 mt-md-5 ">
                            <div class="box box-primary">
                                <div class="panel panel-heading align-self-center">

                                    </br>
                                    <label form="id">ID</label>
                                    <input class="form-control" type="text" name="id_numero" id="idhd"
                                        placeholder="Ingrese el ID" value="{{ $disco->id_numero }}">

                                    <br>

                                    <label form="TarjetaLogica">Tarjeta Logica</label>
                                    <input class="form-control" type="text" name="tarjetaLogica" id="tarjetaL"
                                        Placeholder="Ingrese la targeta logica" value="{{ $disco->tarjetaLogica }}">
                                    <br>

                                    <label form="Modelo">Modelo de Placa</label>
                                    <input class="form-control" type="text" name="modelo" id="model"
                                        Placeholder="Ingrese el modelo" value="{{ $disco->modelo }}">

                                    <br>

                                    <label form="Marca">Marca de Disco Duro</label>
                                    <input class="form-control" type="text" name="marca" id="marca"
                                        Placeholder="Ingrese la marca" value="{{ $disco->marca }}">

                                    <br>
                                    <label form="Capacidad">Capacidad</label>
                                    <input class="form-control" type="text" name="capacidad" id="capacidad"
                                        Placeholder="Ingrese la capacidad" value="{{ $disco->capacidad }}">
                                    <br>

                                    <label form="TipoEntrada">Tipo de entrada</label>
                                    <input class="form-control" type="text" name="tipoEntrada" id="tipoEntrada"
                                        Placeholder="Ingrese el tipo de entrada" value="{{ $disco->tipoEntrada }}">
                                    <br>
                                    <label form="Observaciones">Observaciones</label>
                                    <input class="form-control" type="text" name="observaciones" id="Observaciones" value="{{ $disco->observaciones }}">

                                    <br>
                                    <button type="submit" class="btn btn-warning mb-5" value="editar"
                                        class>Siguiente</button>
                                    <a href="{{ url('showDisk') }}" class="btn btn-primary mb-5">Volver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>



@endsection