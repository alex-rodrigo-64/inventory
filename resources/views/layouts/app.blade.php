<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
        <title>VirtualTecnoDinamyc</title>
        <link rel="shortcut icon" href="./images/logoempresa.png" type="image/x-icon"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: #0D6EFD">
            <div class="container"> 
            <div class="container-fluid">
                    <h1 style="color:#fff">VIRTUAL TECNO DINAMYC</h1>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <!-- Authentication Links -->   
                        @if (Auth::guest())
                        <div class="navbar-nav me-4">
                             <div class="navbar-nav">
                               <a class="btn btn-info" href="{{ route('login') }}">INICIO</a>
                            </div>
                            <div class="navbar-nav">
                               <a class="btn btn-info" href="{{ route('register') }}">Register</a>
                            </div>
                            </div>
                        </div>
                     </div>
                     
                     
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
