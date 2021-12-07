<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('inicio')}}">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('medicamento.index')}}">Medicamentos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('medico.form')}}">Reportes por medico</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('establecimiento.form')}}">Reportes por establecimineto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>