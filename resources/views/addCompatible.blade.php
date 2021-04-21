@extends('plantilla')

@section('seccion')

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VirtualTecnoDinamyc</title>
        <link rel="shortcut icon" href="./images/logoempresa.png" type="image/x-icon"/>
        
    </head>
    <body>
         <div class="header">
            <div class="container-fluid text-white text-center" style=" background-color: #0D6EFD ">
            <h1 >Discos Compatibles</h1>
            </div>
          </div>  
          <form action="{{ route('addCompatible') }}" method="POST" enctype="multipart/form-data">
            <div class="container">
                 {{csrf_field()}}
              <div class="d-flex justify-content-center" style="padding-top: 100px" >
                  <div class="box box-primary" >
                      <div class="panel panel-heading">
                        
                        @if (!empty($new))
                      
                            <h3>Tarjeta Logica: {{$new}} </h3>
                            <br>
                        @else
                                    <?php 
                                    $disco = DB::table('disks')
                                    ->where('bandera', 0)
                                    ->select('tarjetaLogica')
                                    ->first();
                                    ?>
                          <h3>Targeta Logica: {{ $disco->tarjetaLogica}} </h3>
                        @endif
                        
                     
                        <input class="form-control" type="text" name="compatible" placeholder="Ingrese Disco Compatible"> 
                        <button class="btn btn-success mt-5" type="submit">Añadir</button>

                        <a href="{{url('/')}}"class="btn btn-primary mt-5">Terminar Registro</a>  
                     </div>      
                  </div>
               </div>
              </div>
            </form>  
    </body>






@endsection