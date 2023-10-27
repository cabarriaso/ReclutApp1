<!doctype html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
  <script src="/js/custom.js"></script>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color:#082235">
<head style="background-color:#082235">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    
</head>
<body style="background-color:#082235">
    <div id="app" style="background-color:#082235">
        <nav style="background-color:#082235" class="navbar navbar-expand-md navbar-light bg-blue shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color:#ffffff">
                <img src="/img/ortuzarconsulting.jpg" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <body>
                    
  <nav class="navbar navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <?php 
                if( Auth::user()) {
                ?>
        <li class="nav-item">
          <a class="nav-link" href="/cliente" style="color:#ffffff">Datos Maestros</a>
        </li>
            <?php 
                }
              ?>
			<li class="nav-item">
				<a class="nav-link" href="/candidatos" style="color:#ffffff">Candidatos</a>
			</li>
            <?php 
                if( Auth::user()) {
                ?>
			<li class="nav-item">
				<a class="nav-link" href="index.php?v=ingresohh" style="color:#ffffff">Entrevistas</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?v=listarproyectos" style="color:#ffffff">Evaluación</a>
			</li>
            <?php 
                }
              ?>
            <li class="nav-item">
				<a class="nav-link" href="index.php?v=ingresohh" style="color:#ffffff">Procesos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?v=listarproyectos" style="color:#ffffff">Clientes</a>
			</li>
            <?php 
                if( Auth::user()) {
                ?>
            <li class="nav-item">
				<a class="nav-link" href="index.php?v=listarproyectos" style="color:#ffffff">Informes</a>
			</li>
         	  
            <li class="nav-item dropdown">
                <a style="color:#ffffff" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Sistema
                </a>

                <div  class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a style="color:#ffffff" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Region
                    </a>
                    <a style="color:#ffffff" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Pais
                    </a>
                </div>
             </li>  
             <?php 
                }
              ?>
		</ul>
    </div>
    
  
    
  </nav>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a style="color:#ffffff" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a style="color:#ffffff" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a style="color:#ffffff" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a style="color:#000000" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form  id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="background-color:#082235">
            @yield('content')
        </main>
    </div>
</body>
</html>
