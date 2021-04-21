@extends('plantilla')
<head>
<link rel="shortcut icon" href="./images/logoempresa.png" type="image/x-icon"/>
</head>
<nav class="navbar navbar-light" style="background-color: #FFCB00;" <div class="container">
    <div class="row">
        <div class="container-fluid">
            <h1 style="color:#fff">LISTA DE COMPATIBILIDAD</h1>

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
        <title>VirtualTecnoDinamyc</title>
        
    </head>
    <body>
    <nav class="navbar navbar-expand-lg  bg-light">
                <a href="{{ url('/') }}" class="btn btn-secondary btn-lg btn-block">Volver</a>
    </nav>
    <div class="container-fluid" style="background-color: #0D6EFD ">
         <div class="row">

                <table class="table text-white">
                <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tarjeta Logica</th>
            <th scope="col">Modelo</th>
            <th scope="col">Marca</th>
            <th scope="col">Capacidad</th>
            <th scope="col">Tipo de Entrada</th>
            <th scope="col">Observaciones</th>
            @foreach($discoL as $discoL)
          </tr> 
                 <td>{{$discoL->id_numero}}</td>
                 <td>{{$discoL->tarjetaLogica}}</td>
                 <td>{{$discoL->modelo}}</td>
                 <td>{{$discoL->marca}}</td>
                 <td>{{$discoL->capacidad}}</td>
                 <td>{{$discoL->tipoEntrada}}</td>
                 <td>{{$discoL->observaciones}}</td>

    @endforeach
           </table>
           </div>
    </div>
    </body>
   <!-- <footer>
        <div class="row">
          <div class="col-5"></div> 
            <div class="col-5"> <a href="{{ url('/') }}" class="btn btn-primary float-left ">Volver</a></div>
           </div>   
    </footer> -->



    @endsection