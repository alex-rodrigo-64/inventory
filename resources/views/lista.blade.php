@extends('plantilla')
<head>
    <style>
        {
            margin:0px;
        }
        
        
        .whiteheadline {
            font-size: 48px;
            font-family: "Open Sans";
            color: rgb(255, 255, 255);
            font-weight: bold;
        }
        
        .header-rectangle { 
            text-align: center;
            line-height: 143px;
        }
    </style>
<link rel="shortcut icon" href="./images/logoempresa.png" type="image/x-icon"/>
</head>
<nav class="navbar navbar-light" style="background-color: #FFCB00;" class="container">
    <div class="row">
        <div class="header-rectangle">
            <h1 style="color:#000" class="whiteheadline">INVENTARIO</h1>
            <H2>{{$mensaje}}
            </H2>

        </div>
    </div>
    </div>
</nav>

       
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

   
    
    <div class="container-fluid" style="background-color: #FFCB00 ">
        <div class="row">

            <table class="table table-bordered text-black">
            
                    <thead>
                        <tr >
                            <th scope="col">USB</th>
                            <th scope="col">SATA</th>
                        </tr>
              @foreach($dis as $dis)
                        <tr>
                        <td>{{$dis->USB}}</td>
                        <td>{{$dis->SATA}}</td>
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


