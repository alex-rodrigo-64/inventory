@extends('plantilla')
@section('seccion')       
    <header>
    <style>
        .titulo{
            text-align:center;
            font: 2rem;
            
        }
    </style>
         <div class="titulo">
            <h2>
                 Inventario
            </h2>
         </div>
    </header>
    <div class="container">
        <div class="box-body">
        <style>
            /* table, th, td{
                border: 1px solid black;
                border-collapse: collapse;
            }

            th, td{
                padding: 15px;
            } */
        </style>

            <table class="table table-bordered table-responsive" style="width: 100%">
                
                <thead>
                    <tr >
                        <th scope="col">ID</th>
                        <th scope="col">Tarjeta Logica</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Capacidad</th>
                        <th scope="col">Tipo de Entrada</th>
                        <th scope="col">Observaciones</th>
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
                    </tr>
                    @endforeach
                    
            </table>


  

        </div>
    </div>


  
@endsection