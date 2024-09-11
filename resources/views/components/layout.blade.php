<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina de inicio</title>
    <link rel="stylesheet" href="{{asset('miRecuperacion/public/css/bootstrap.min.css')}}">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <strong>
                    <a class="navbar-brand" href="">Recuperación</a>
                </strong>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                CRUD's
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('empleados.index')}}">Empleados</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{route('productos')}}">Productos</a></li>
                            </ul>
                        @auth
                        <li class="nav-item">
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                document.getElementById('logOut').submit();
                                ">
                                <i class="ti-power-off text-primary"></i>
                                Cerrar sesión
                                <form id="logOut" action="{{ route('logOut') }}" method="post" style="display:none;">
                                    @csrf()
                                </form>
                            </a>
                        </li>
                        @endauth
                    </ul>
                    @auth


                    <span class="navbar-text">
                        <img src="{{asset('miRecuperacion/public/img/6073873.png')}}" width="24px;" class="figure-img img-fluid rounded me-2" alt="...">
                        <figcaption class=" float-end ">{{ Auth::user()->name}}</figcaption>
                    </span>
                    @endauth
                </div>
            </div>
        </nav>
        {{$slot}}
    </div>
    <script src="{{asset('miRecuperacion/public/js/popper.min.js')}}"></script>
    <script src="{{asset('miRecuperacion/public/js/bootstrap.min.js')}}"></script>

</body>

</html>