@extends('plantilla')
<head>
<link rel="shortcut icon" href="./images/logoempresa.png" type="image/x-icon"/>
</head>
<nav class="navbar navbar-light" style="background-color: #FFCB00;" class="container">
    <div class="row">
        <div class="container-fluid">
            <h1 style="color:#000">LISTA DE DISCOS</h1>

        </div>
    </div>
    </div>
</nav>

        <div class="row">
            <div class="col-4">  
                   
            </div> 
            <div class="col-3 ">       
             <form action="{{ route('disco.filtrado') }}" method="POST" class="d-flex">
                    {{csrf_field()}}
                    <input class="form-control me-4" type="search" placeholder="Ingrese tarjeta logica" aria-label="Search" name="busqueda">
                    <button class="btn btn-outline-warning" type="submit">Búsqueda</button>        
                </form> 
            </div>
            <div class="col-1">  
                <a href="{{url('showDisk/print')}}"class="btn btn-outline-warning">PDF</a>
            </div>
            
        </div>
       
@section('seccion')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VirtualTecnoDinamyc</title>

</head>

<body>

    <nav class="navbar navbar-expand-lg  bg-light">
                <a href="{{ url('/') }}" class="btn btn-secondary btn-lg btn-block">Volver</a>
    </nav>
    
    <div class="container-fluid" style="background-color: #FFCB00 ">
        <div>

            <table class="table table-bordered table-responsive text-black">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tarjeta Logica</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Capacidad</th>
                        <th scope="col">Tipo de Entrada</th>
                        <th scope="col">Observaciones</th>
                        <th scope="col">Acciones</th>        
                       
                    </tr>
                     @foreach($dis as $dis)
                     <tr>
                    <td>{{$dis->id_numero}}</td>
                    <td>{{$dis->tarjetaLogica}}</td>
                    <td>{{$dis->modelo}}</td>
                    <td>{{$dis->marca}}</td>
                    <td>{{$dis->capacidad}}</td>
                    <td>{{$dis->tipoEntrada}}</td>
                    <td>{{$dis->observaciones}}</td>
                    <td>
                        <a href="{{url('editar',$dis->id)}}" class="btn btn-success">Editar</a>
 
                        <form action="{{url('showDisk/eliminar/'.$dis->id)}}" method="post" class="d-inline">
                        {{csrf_field()}}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger" onclick = " return confirm ('¿Esta seguro de Eliminar este Usuario?'); " type="submit">Eliminar</button>
                        </form>    
                    </td> 
                    </tr>
                    @endforeach
            </table>
           
        </div>
        
    </div>
    
</body>
<nav class="navbar navbar-expand-lg  bg-light">
                <a href="{{ url('/') }}" class="btn btn-secondary btn-lg btn-block">Volver</a>
    </nav>
@endsection