<nav class="navbar navbar-inverse navbar-fixed-top">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/') }}">WookieeVet</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ url(path: '/') }}">Home</a></li>
      <li class="dropdownd">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Especialidades <span class="caret"></span></a>
        <ul class="dropdown-menu" style="background-color: black; color: white;">
          <li><a href="#">Radiologia</a></li>
          <li><a href="#">Cirugía</a></li>
          <li><a href="#">Nutrición</a></li>
        </ul>
      <li><a href="#">Preguntas Frecuentes</a></li>
      <li><a href="#">Precios</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Registrar</a></li>
      <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesion</a></li>
    </ul>
  </div>
  </nav>
</nav>